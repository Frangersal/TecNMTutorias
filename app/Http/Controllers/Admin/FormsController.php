<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use App\User;
use Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view('admin.forms.index')->with('forms',$forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.forms.create');
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
        return redirect()->route('admin.forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        $forms = Form::all();
        if(Gate::denies('admin-action')) { 
            return redirect()->route('admin.forms.index');
        }
        return view('admin.forms.edit')->with([
            'form'=>$form
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Form  $form
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'description'=> 'required',
        ]);

        $form = Form::find($id);
        $form->name = $request->get('name');
        $form->description=$request->get('description');
        $form->update();

        return redirect()->route('admin.forms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        
        if(Gate::denies('admin-action')) { 
            return redirect()->route('admin.forms.index');
        }

        $form->delete();
        return redirect()->route('admin.forms.index');
        
    }
}
