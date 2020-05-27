<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Auth;
use DB;
use App\Form;
use App\User;
use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnswerController extends Controller
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
        $answers = Answer::all();
        return view('student.answers.index')->with('answers',$answers );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.answers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Argumentos question_id=id 
    public function store(Request $request)
    {
        $request->validate([
            'txtName'=>'required',
        ]);

        //$question_id = Question::find($id);
        $user_id = Auth::user()->id;

        $answer = new Answer([
            'question_id' =>'1',
            'user_id' =>$user_id,
            'name' => $request->get('txtName')
        ]);
 
        $answer->save();
        return redirect()->route('student.forms.index');
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
        $answers = Answer::all();

        return view('student.answers.index')->with('questions',$questions);
    
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
