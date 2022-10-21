<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use App\Question;
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
        $create = $request->get('create');
        $create_editQuestion = $request->get('create_editQuestion');
        $name = $request->get('txtName');
        $description=$request->get('txtDescription');
        $queryObjForm = Form::where('name', '=', $name)->where('description', '=', $description)->first();
        //echo $create;
        //echo gettype($queryObjForm)."<br>";
        //var_dump(empty($queryObjForm));
        //echo $queryObjForm;

        $request->validate([
            'txtName'=>'required',
            'txtDescription'=> 'required'
        ]);

        if ($create==null) {
            
            //echo $queryObjForm;
                $form = new Form([
                    'name' => $request->get('txtName'),
                    'description'=> $request->get('txtDescription'),
                ]);
                $form->save();
                return view('admin.forms.edit')->with(['form'=>$queryObjForm]);
                //echo "no se salva porque esta repetido";
            //echo "<br>---";
            //echo "<br>Vista Crear y editar";
        } else{
            $form = new Form([
                'name' => $request->get('txtName'),
                'description'=> $request->get('txtDescription'),
            ]);
                $form->save();
            return redirect()->route('admin.forms.index');
            //echo "<br>Vista Crear y ya ALV";
        }
        
        
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
        //echo "<br>".$form;
        //echo "<br>tipo form: ".gettype($form);
        $arrayForm = json_decode($form, true);
        //echo "<br>".$arrayForm['id'];
        //echo "<br>tipo form: ".gettype($arrayForm['id']);
        
        $questions = Question::where('form_id', '=', $arrayForm['id'])->get();
        //echo "<br>".$questions;
        
        //$arrayquestions = json_decode($questions, true);
        //echo "<br>".$arrayquestions['id'];
        //for ($i=0; $i <= count($arrayquestions) ; $i++) { 
        //    echo "<br>-questions".$arrayquestions[$i];
        //}
        $forms = Form::all();
        if(Gate::denies('admin-action')) { 
            return redirect()->route('admin.forms.index');
        }
        
        return view('admin.forms.edit')->with([ 
            'form'=>$form,
            'questions'=>$questions
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
