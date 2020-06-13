<?php

namespace App\Http\Controllers\Student;

use App\Form;
use App\User;
use App\Question;
use App\Option;
use App\Answer;
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
        //$answers = Answer::all();,'answers',$answers
        
        return view('student.forms.index')->with('forms',$forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.forms.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // Mostrar las preguntas con el ID del formulario
    public function show($id)
    {

        
        $userId = auth()->id();

        $questions = Question::where('form_id', $id)->get();
        $options = Option::all();
        $answers = Answer::all();


        return view('student.forms.show')->with('userId',$userId)->with('questions',$questions)->with('options',$options)->with('answers',$answers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {  
        $questions = Question::all();

        return view('student.forms.answer')->with('questions',$questions);
    
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
        //   u.U
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   u.U
    }
}
