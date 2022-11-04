<?php

namespace App\Http\Controllers\Tutor;
//use Barryvdh\DomPDF\Facade\Pdf;  //Dont work
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
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
        $pupilName      = $userIdPupil->name;
        $pupilPicture   = $userIdPupil->picture;
        $forms      = Form::all(); 
        $questions  = Question::all();
        $answers    = Answer::all();

        $pdf = PDF::loadView('tutor.pupil.form.showpdf', [
            'id'        => $id,
            'pupilName' => $pupilName,
            'pupilPicture' => $pupilPicture,
            'forms'     => $forms,
            'questions' => $questions,
            'answers'   => $answers
        ]);
        //var_dump($pdf); die();
        return $pdf->download('Formularios Tutoria '.$id.'_'.$pupilName.'.pdf');
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
