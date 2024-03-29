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

    //public function arriba(Request $request, $id){
    //    $id=21;
    //    return view();
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Argumentos question_id=id 
    public function store(Request $request)
    {
        // Variables
        $arrayName = $request->get('txtName');
        $arrayQuestionId= $request->get('idQuestion');
        $user_id = auth()->id();
        // Echo Tests 
        echo  "arrayName Vanila: ".var_dump($arrayName)."<br>";
        echo  "arrayName Tipo: ".gettype($arrayName)."<br>";
        echo  "arrayQuestionId Vanila: ".var_dump($arrayQuestionId)."<br>";
        echo  "arrayQuestionId Tipo: ".gettype($arrayQuestionId)."<br>";
        
        // Ciclo segun cuantas preguntas tenga el formulario.
        for ($x = 0; $x <= count($arrayQuestionId)-1 ; $x++) {
            // Echo Tests  /* echo "->> Iteracion : $x <br>"; echo  $arrayName[$x]."<br>"; echo  $arrayQuestionId[$x]."<br>"; echo  $user_id."<br>"; */
            
            $queryObjAnswer = Answer::where('question_id', '=', $arrayQuestionId[$x])->where('user_id', '=', $user_id)->get();
            $queryArrayAnswer = json_decode($queryObjAnswer, true);
            echo "<br>--*queryAnswer: ";  var_dump(empty($queryArrayAnswer));  echo "*--<br>";

            echo  "X in for antes de if: ".$x."<br>";
            //Si $arrayName[$x] el es nulo entonces...empty(
            if ($arrayName[$x]==null) {//unset($arrayName[$x]);
                echo  "arrayName Vanila: ".var_dump($arrayName)."<br>";
            }else {
                //Checar Si user_id ya contesto el $arrayQuestionId[$x]
                if ($queryArrayAnswer!=null) {
                    // Echo Tests /* echo "<br>->> TRUE Iteracion : $x <br>"; echo "queryArrayAnswer: ".$queryArrayAnswer."<br>"; echo  $arrayName[$x]."<br>"; echo  $arrayQuestionId[$x]."<br>"; echo  $user_id."<br>"; echo ">> :( NO guarda en BD!<br>";*/
                } elseif ($queryArrayAnswer==null) {
                    // Echo Test /* echo "<br>->>FALSE Iteracion : $x <br>"; echo "queryArrayAnswer: ".$queryArrayAnswer."<br>"; echo  $arrayName[$x]."<br>"; echo  $arrayQuestionId[$x]."<br>"; echo  $user_id."<br>"; echo ">> :) Crea instancia y guarda en BD<br>"; */
                    //Crear una instancia de Answer y guardarla para la BD
                    $answer = new Answer([
                        'name' => $arrayName[$x],               
                        'question_id' => $arrayQuestionId[$x], 
                        'user_id' => $user_id,
                    ]);
                    $answer->save();
                }
                
            }
        }
        //Regresar al index del formulario de estudiantes
        return redirect()->route('student.forms.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    { 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
    
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

        echo "<br>-".$request;
        die;

        /* $request->validate([ 'name'=>'required',
            'question_id'=> 'required', 'user_id'=>'required', ]); */

        $answer = Form::find($id);
        $answer->name = $request->get('name');
        $answer->question_id=$request->get('question_id');
        $answer->user_id=$request->get('user_id');
        $answer->update();

        //return redirect()->route('admin.forms.index');
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
        //
    }
}
