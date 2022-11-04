<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $pupils = Pupil::all();
        return view('admin.users.edit')->with([
            'user'=>$user,'roles'=>$roles,'tutors'=>$tutors,'pupils'=>$pupils
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
        //$request = request();

        $profileImage = $request->file('picture');
        $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();

        $upload_path = 'images/profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->campus = $request->campus;
        $user->faculty = $request->faculty;
        $user->controlNumber = $request->controlNumber;
        $user->picture = $profile_image_url;

        $user->roles()->sync($request->roles);

        //Convertir array a string y de ahi a int. xD
        $arrayRole= $request->roles;
        $stringRole= implode($arrayRole);
        $role = (int)$stringRole;

        //Id del usuario que estamos editando
        $id = $user->id;
        $nada= "puej naah";
        $tutorDefecto = 1;
        
        // $user->save(); 
        //var_dump($role,$id); die;


        switch ($role) {
            case 1:
                # Admin , no hacer nada
                // echo "Selecciono D1 <br>";
                // var_dump($role,$id); 
                $user->save(); 
                return redirect()->route('admin.users.index');
                break;
            case 2:
                # Tutor, agregar id a la tabla de tutores, osea ir al metodo crate de tutorescontroller
                // echo "Selecciono D2 <br>";
                // var_dump($role,$id); users.tutor.store
                // necesito tambien el id de user
                $user->save(); 

                $tutorExist = DB::table('tutors')->whereUser_id($id)->first();                 
                // var_dump($pupilExist);  die();
                if ($tutorExist==null) {
                    //crear un tutor
                    $tutor = new Tutor([
                        'description' => $nada,
                        'user_id'=> $id,
                    ]);
            
                    $tutor->save();

                    return redirect()->route('users.tutor.index');
                }
                else {
                    $tutor = $tutorExist;

                    return redirect()->route('users.tutor.index');
                }

                
                break;
            case 3:
                 # Student, agregar id a la tabla de pupilos, y redireccionar a una vista para seleccionar tutor
                // echo "Selecciono D3 <br>";
                // var_dump($role,$id); 
                $user->save(); 

                $pupilExist = DB::table('pupils')->whereUser_id($id)->first();                 
                // var_dump($pupilExist);  die();
                if ($pupilExist==null) {
                    //crear un pupil
                    // var_dump($pupilExist);
                    $pupil = new Pupil([
                        'coment' => $nada,
                        'tutor_id'=> $tutorDefecto,
                        'user_id'=> $id,
                    ]);
            
                    $pupil->save();
                    // var_dump($pupil);  die();

                    $tutors = Tutor::all();
        
                    return view('users.pupil.asignar.edit')->with([
                        'pupil'=>$pupil,
                        'tutors'=>$tutors,
                    ]);
                }
                else {
                    $pupil = $pupilExist;
                    //var_dump($pupil);  die();

                    $tutors = Tutor::all();
            
                    return view('users.pupil.asignar.edit')->with([
                        'pupil'=>$pupil,
                        'tutors'=>$tutors,
                    ]);
                }

                break;
            default:
                // echo "ke pdo?! >:V";
                // var_dump($role,$id); 
                return redirect()->route('admin.users.index');
        }
        // echo "ke pdo?! >:V por pinches dos!!!!! >=V";
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
