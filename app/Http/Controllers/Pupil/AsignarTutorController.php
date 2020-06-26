<?php

namespace App\Http\Controllers\Pupil;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Tutor;
use App\Pupil;
use Gate;
use Illuminate\Http\Request;

class AsignarTutorController extends Controller
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
        // return view('admin.users.index')->with('users', $users);
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
        $request->validate([
            'txtName'=>'required',
            'txtDescription'=> 'required'
        ]);

        $form = new Form([
            'name' => $request->get('txtName'),
            'description'=> $request->get('txtDescription'),
        ]);
 
        $form->save();
        //Crear registro en la tabla pupil
        return redirect()->route('admin.forms.index');
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
    public function edit(Pupil $pupil)
    {
        // Si el usuario en Gate de la accion edit-users no es Admin, entonces solo recargar la pagina para que no tenga acceso
        // if(Gate::denies('tutor-action')){
        //     return redirect(route('users.pupil.index'));
        // }
        // #dd($user);
    // $tutors = Tutors::all();
    
    // // $pupil = Pupil::all()->last()->id;
    // return view('users.pupil.asignar.edit')->with([
    //     'pupil'=>$pupil,'tutors'=>$tutors,
    // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        #dd($request);
        $nada="nada po'";
        
        $pupil = Pupil::find($id);
        $pupil->coment = $nada;
        $pupil->tutor_id = $request->txtTutorId;
        $pupil->user_id = $request->txtUserId;

        $pupil->save();

        return redirect()->route('users.pupil.index');
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
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }

        $user->roles()->detach();
        $user->delete();

        return redirect()->route('admin.users.index');
    }
}
