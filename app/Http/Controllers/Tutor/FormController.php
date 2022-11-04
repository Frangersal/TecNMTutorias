<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Form;
use App\Question;
use App\Answer;

use Illuminate\Support\Facades\DB;

class FormController extends Controller
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
        return view('tutor.pupil.form.index')->with('forms',$forms);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pupilId        = $id;
        $userIdPupil    = DB::table('users')->whereId($pupilId)->first(); 
        $pupilName      = $userIdPupil->name;
        $pupilPicture     = $userIdPupil->picture;
        
        // $userId = $id;
        // var_dump($userId); die();
        $forms      = Form::all();
        $questions  = Question::all();
        $answers    = Answer::all();
        return view('tutor.pupil.form.show')
        ->with('id',$id)
        ->with('pupilName',$pupilName)
        ->with('pupilPicture',$pupilPicture)
        ->with('forms',$forms)
        ->with('questions',$questions)
        ->with('answers',$answers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
