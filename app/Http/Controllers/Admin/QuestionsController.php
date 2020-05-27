<?php

namespace App\Http\Controllers\Admin;


use App\Form;
use App\User;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
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
        $questions = Question::all();
        return view('admin.questions.index')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.questions.create');
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
        ]);

        $question = new Question([
            'form_id' =>'1',
            'name' => $request->get('txtName')
        ]);
 
        $question->save();
        return redirect()->route('admin.questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)    
    {
        //Asignar form a question
        $forms = Form::all();
        //---
        $questions = Question::all();

        return view('admin.questions.edit')->with([
            'question'=>$question,
            'forms' => $forms
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'form_id'=>'required',
            'name'=>'required',
        ]);

        $question = Question::find($id);
        $question->form_id = $request->get('form_id');
        $question->name = $request->get('name');
        $question->update();

        return redirect()->route('admin.questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('admin.questions.index');
    }
}
