<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\Role;

use Gate;
class TutorController extends Controller
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
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', '=', 'tutor'); })->get();
        return view('users.tutor.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        echo "Estoy dentro de TutorController@create <br>";
        // var_dump($id);
         die;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        echo "Estoy dentro de TutorController@store <br>";
        var_dump($id); die;
        

        // $request->validate([
        //     'txtDescription'=> 'required'
        // ]);

        // $form = new Form([
        //     'description'=> $request->get('txtDescription'),
        // ]);
 
        // $form->save();
        //Crear registro en la tabla tutor
        // return redirect()->route('admin.forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "Estoy dentro de TutorController@edit <br>";
        var_dump($id);
         die;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
