<?php

namespace App\Http\Controllers\Student;
use DB;
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
        $userId = auth()->id();

        $forms = Form::all();
        $questions = Question::all();
        //$answers = Answer::where('user_id', '=', $userId);
        $answers = Answer::where('user_id', '=', $userId)->get();
        //$queryObjAnswer = Answer::where('question_id', '=', $arrayQuestionId[$x])->where('user_id', '=', $user_id)->get();
        //echo $answers;
        
        return view('student.forms.index')
        ->with('forms',$forms)
        ->with('questions' ,$questions)
        ->with('answers',$answers);
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
        //$answers = Answer::all();


        return view('student.forms.show')->with('userId',$userId)->with('questions',$questions)->with('options',$options);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        // - Id del usuario/pupilo  *HECHO*
        $userId = auth()->id();
        // - Preguntas del formulario en especifico *HECHO*
        $questions = Question::where( 'form_id', $id)->get();
        //Respuestas hechas por el pupilo en este formulario en especifico *HECHO
        // - Answer tiene: id, name, question_id, user_id
        //Creamos un array, donde almacenaremos la columna 'id' del objeto convertido a array '$question'
        $questionsIDS = array_column($questions->toArray() , 'id');
        // Query de eloquent 'donde' user es la variable $userId 
        //y 'donde en' la columna question_id sera todos los elementos del array $questionsIDS...
        $answers = Answer::where( "user_id",  $userId )->whereIn('question_id', $questionsIDS)->get();
        //Opciones solo de este formulario en especifico
        // - Option tiene: id, name, question_id        
        $options = Option::whereIn('question_id', $questionsIDS)->get();

        echo "<br> <br> - userId: ".$userId;
        echo "<br> <br> - questions: ".$questions;
        echo "<br> <br> - answers: ".$answers;
        //echo "<br> <br> - options: ".$options;

        return view('student.forms.edit')
        ->with('userId', $userId)
        ->with('questions', $questions)
        ->with('options', $options)
        ->with('answers', $answers);
    
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
        // id, name, question_id, user_id

        //echo "<br>-".$request; txtName
        //$arrayRequest = json_decode($request, true);$request;
        echo "<br>- request: ". $request;
        echo "<br>- request: ".gettype($request);
        echo "<br>- id: ". $id;
        echo "<br>- id: ".gettype($id);
        echo "<br>- $request->get('txtName');: ".$request->get('txtName');

        //echo "<br>-".$id;
        die;

        /* $request->validate([ 'name'=>'required',
            'question_id'=> 'required', 'user_id'=>'required', ]); */

        $answer = Form::find($id);
        $answer->name = $request->get('txtName');
        $answer->question_id = $request->get('question_id');
        $answer->user_id = $request->get('user_id');
        $answer->update();

        return redirect()->route('student.forms.index');
        //return view('student.answers.index')->with('questions',$questions);        
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
