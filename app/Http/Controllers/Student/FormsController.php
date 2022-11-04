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
        //$queryObjAnswer = Answer::where('question_id', '=', $arrayQuestionId[$i])->where('user_id', '=', $user_id)->get();
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
        //echo "<br> - arrayName : ".$arrayName;
        //echo  "<br> - arrayName Vanila : ".var_dump($arrayName);
        //echo  "<br> - arrayName Tipo : ".gettype($arrayName);
        //echo $request."<br>"; 
        //$arrayAnswersId = $request->get('idAnswers');
        $arrayName = $request->get('txtName');
        $arrayQuestionId= $request->get('idQuestion');
        $user_id = auth()->id();
        
        //echo  "<br> - arrayAnswersId Vanila : ";
        //var_dump($arrayAnswersId);
        echo  "<br> - arrayName Vanila : ";
        var_dump($arrayName);
        echo  "<br> - arrayQuestionId Vanila : ";
        var_dump($arrayQuestionId);
        
        for ($i=0; $i<=count($arrayQuestionId)-1; $i++) {
            echo  "<br> - arrayQuestionId[] Iteration! : ".$arrayQuestionId[$i];
            $queryObjAnswer = Answer::where('question_id', '=', $arrayQuestionId[$i])->where('user_id', '=', $user_id)->get();
            $queryArrayAnswer = json_decode($queryObjAnswer, true);
            echo "<br> - *queryAnswer: ";  
            //var_dump(empty($queryArrayAnswer)); 
            var_dump($queryArrayAnswer[0]['id']);
            echo "*- -<br> arrayQuestionId : ".$queryArrayAnswer[0]['id'];
            
            echo  "<br> - i in for antes de if: ".$i."<br>";
            //Si $arrayName[$i] el es nulo entonces...empty( 
            if ($arrayName[$i]==null) {//unset($arrayName[$i]);
                echo  "wtf arrayName Vanila: ".var_dump($arrayName)."<br>";
            }else {
                //Checar Si user_id ya contesto el $arrayQuestionId[$i]
                if ($queryArrayAnswer!=null) {
                    // Echo Tests 
                    /* echo "<br>->> TRUE Iteracion : $i <br>"; echo "queryArrayAnswer: ".$queryArrayAnswer."<br>"; echo  $arrayName[$i]."<br>"; echo  $arrayQuestionId[$i]."<br>"; echo  $user_id."<br>"; echo ">> 
                    :) SI actualizar en BD!<br>";;*/
                    echo "ACTUALIZAR!!".$i;
                    
                    $answer = Answer::find($queryArrayAnswer[0]['id']);
                    $answer->name = $arrayName[$i];
                    $answer->question_id=$arrayQuestionId[$i];
                    $answer->user_id=$user_id;
                    $answer->update();
                    // SIIII!!, con esta cosa funcionando dejo registro que esta lista la 2da version estable
                    // Termine a las 2:19 PM, Viernes 4 de Noviembre del 2022
                } elseif ($queryArrayAnswer==null) {
                    // Echo Test 
                    /* echo "<br>->>FALSE Iteracion : $i <br>"; echo "queryArrayAnswer: ".$queryArrayAnswer."<br>"; echo  $arrayName[$i]."<br>"; echo  $arrayQuestionId[$i]."<br>"; echo  $user_id."<br>"; echo ">> 
                    xd NO Crea instancia y guarda en BD<br>"; 
                    //Crear una instancia de Answer y guardarla para la BD
                    $answer = new Answer([
                        'name' => $arrayName[$i],               
                        'question_id' => $arrayQuestionId[$i], 
                        'user_id' => $user_id,
                    ]);
                    $answer->save();*/
                }
                
            }
        }
        //die;
        //Regresar al index del formulario de estudiantes
        return redirect()->route('student.forms.index');

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

        //echo "<br> <br> - userId: ".$userId;
        //echo "<br> <br> - questions: ".$questions;
        //echo "<br> <br> - answers: ".$answers;
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
    public function updateServeralAnwser(){

    }
    public function update(Request $request, $id)
    {
        // En proceso de DESCONTINUAR METODO
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
