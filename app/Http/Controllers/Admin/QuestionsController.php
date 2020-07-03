<?php

namespace App\Http\Controllers\Admin;


use App\Form;
use App\User;
use App\Question;
use App\AnswerType;

use App\Http\Controllers\Controller;

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
        $answers_types = AnswerType::all();
        
        return view('admin.questions.index')->with('questions',$questions)->with('answers_types',$answers_types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $answersTypes = AnswerType::all();
        $forms = Form::all();
        return view('admin.questions.create')->with('forms',$forms,)->with('answers_types',$answersTypes,);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request answer_type_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'txtName'=>'required',
            //'txtAnswer_Type'=>'required',
        ]);

        $question = new Question([
            'form_id' => $request->get('txtIdForm'),
            'answer_type_id' =>$request->get('txtIdAnswerType'),
            'name' => $request->get('txtName'),
           // 'option' => $request->get('txtOption'),
            
            
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
        $answers_types = AnswerType::all();
        $questions = Question::all();

        return view('admin.questions.edit')->with([
            'question'=>$question,
            'answers_types' => $answers_types,
            'forms' => $forms,
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
            'txtIdForm'=>'required',
            'txtIdAnswerType'=>'required',
            'name'=>'required',
            //'txtOption'=>'required',
        ]);

        $question = Question::find($id);
        $question->form_id = $request->get('txtIdForm');
        $question->answer_type_id = $request->get('txtIdAnswerType');
        $question->name = $request->get('name');
        //$question->option = $request->get('txtOption');
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
