<?php

namespace App\Http\Controllers\Tutor;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Form;
use App\Question;
use App\Answer;

use Illuminate\Support\Facades\DB;

class PDFController extends Controller
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
        //
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
        // var_dump($userIdPupil->name); die();
        $pupilName  = $userIdPupil->name;
        $forms      = Form::all();
        $questions  = Question::all();
        $answers    = Answer::all();

        $arrayData = [
            'id'        => $id,
            'pupilName' => $pupilName,
            'forms'     => $forms,
            'questions' => $questions,
            'answers'   => $answers
        ];

        $data = (object) $arrayData;

        // var_dump($data); die();

        // var_dump($data->pupilName); die();
        // var_dump($data["pupilName"]); die();

        
        $pdf = \PDF::loadView('tutor.pupil.form.showpdf', compact('data'));
        return $pdf->download('formulariosAlumno.pdf');
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
