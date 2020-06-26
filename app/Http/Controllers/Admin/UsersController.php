<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use App\Tutor;
use App\Pupil;
use Gate;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function _contruct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // Si el usuario en Gate de la accion edit-users no es Admin, entonces solo recargar la pagina para que no tenga acceso
        if(Gate::denies('admin-tutor-action')){
            return redirect(route('admin.users.index'));
        }
        #dd($user);
        $tutors = User::whereHas('roles', function ($query) 
        {$query->where('name', '=', 'tutor'); })->get();

        $roles = Role::all();
        return view('admin.users.edit')->with([
            'user'=>$user,'roles'=>$roles,'tutors'=>$tutors
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        #dd($request);
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->campus = $request->campus;
        $user->faculty = $request->faculty;
        $user->controlNumber = $request->controlNumber;
        $user->picture = $request->picture;

        $user->roles()->sync($request->roles);

        //Convertir array a string y de ahi a int. xD
        $arrayRole= $request->roles;
        $stringRole= implode($arrayRole);
        $role = (int)$stringRole;

        //Id del usuario que estamos editando
        $id = $user->id;
        $nada= "puej naah";
        $tutorDefecto= 1;
        
        // $user->save(); 
        //var_dump($role,$id); die;


        switch ($role) {
            case 1:
                # Admin , no hacer nada
                echo "Selecciono D1 <br>";
                // var_dump($role,$id); 
                $user->save(); 
                return redirect()->route('admin.users.index');
                break;
            case 2:
                # Tutor, agregar id a la tabla de tutores, osea ir al metodo crate de tutorescontroller
                echo "Selecciono D2 <br>";
                // var_dump($role,$id); users.tutor.store
                // necesito tambien el id de user
                $user->save(); 

                //crear un tutor
                $tutor = new Tutor([
                    'description' => $nada,
                    'user_id'=> $id,
                ]);
         
                $tutor->save();

                return redirect()->route('admin.users.index');
                break;
            case 3:
                 # Student, agregar id a la tabla de pupilos, y redireccionar a una vista para seleccionar tutor
                echo "Selecciono D3 <br>";
                // var_dump($role,$id); 
                $user->save(); 

                //crear un pupil
                $pupil = new Pupil([
                    'coment' => $nada,
                    'tutor_id'=> $tutorDefecto,
                    'user_id'=> $id,
                ]);
         
                $pupil->save();

                $tutors = Tutor::all();
        
                // $pupil = Pupil::all()->last()->id;
                return view('users.pupil.asignar.edit')->with([
                    'pupil'=>$pupil,'tutors'=>$tutors,
                ]);

                // $pupil = Pupil::all()->last()->get()->id;
                // $pupil=Pupil::where('id_perfil',$dato)->get();
                // var_dump($pupil);
                // return redirect()->action('Pupil\AsignarTutorController@edit', ['pupil' => $pupil]);
                // return redirect()->route('users.pupil.index');
                break;
            default:
                echo "ke pdo?! >:V";
                // var_dump($role,$id); 
                return redirect()->route('admin.users.index');
        }
        echo "ke pdo?! >:V por pinches dos!!!!! >=V";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {        
        // Si el usuario en Gate de la accion edit-users no es Admin, entonces solo recargar la pagina para que no tenga acceso
        if(Gate::denies('admin-tutor-action')){
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
