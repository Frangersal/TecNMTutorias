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
        // HOY
        echo "<br> -- ".$request;
        echo "<br> -- ".gettype($request);
        $answersTypes = AnswerType::all();
        $forms = Form::all();
        //return view('admin.questions.create')->with('forms',$forms,)->with('answers_types',$answersTypes,);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request answer_type_id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crear = $request->get('crear');
        $crearIrOpcion = $request->get('crearIrOpcion');

        echo "<br> -- crear: ".$crear;
        echo "<br> -- crearIrOpcion: ".$crearIrOpcion;
        $arrayRequest = json_decode($request, true);
        
        $shit = count($arrayRequest);
        for ($i = 0; $i < $shit; ++$i){
            echo "<br> * ".$i.".-".$arrayRequest[$i];
        }
        //echo "<br> -- arrayRequest: ".$arrayRequest['crearIrOpcion'];
        echo "<br> --  ".gettype($arrayRequest); 
        
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
        $formId = $request->get('txtIdForm');
        return redirect()->route('admin.forms.edit',[$formId]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($formId)
    {   
        // formId, tipo de pregunta, 
        echo "<br> -- formId: ".$formId; 
        echo "<br> --  ".gettype($formId); 
        $answersTypes = AnswerType::all(); 
        $form = Form::where('id', '=', $formId)->first();  
        //echo "<br> -- form: ".$form; 

        return view('admin.questions.show')->with('form',$form,)->with('answers_types',$answersTypes,);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)    
    {
        $idForm = $question['form_id'];
        //Asignar form a question
        $form = Form::where('id', '=', $idForm)->first(); 
        //$arrayForm = json_decode($objForm, true);
        //echo "<br> -- arrayForm: ".$arrayForm['id']; 
        //echo "<br> -- tipo: ".gettype($arrayForm['id']);
        //$formId = $arrayForm['id'];
        //---
        $answers_types = AnswerType::all();
        $questions = Question::all();

        return view('admin.questions.edit')->with([
            'question'=>$question,
            'answers_types' => $answers_types,
            'form' => $form,
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
        $formId = $request->get('txtIdForm');
        //return redirect()->route('admin.questions.index');
        return redirect()->route('admin.forms.edit',[$formId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        
        $idForm = $question['form_id'];
        //Asignar form a question
        $objForm = Form::where('id', '=', $idForm)->first(); 
        $arrayForm = json_decode($objForm, true);
        //echo "<br> -- arrayForm: ".$arrayForm['id']; 
        //echo "<br> -- tipo: ".gettype($arrayForm['id']);
        $formId = $arrayForm['id'];
        //---
        $answers_types = AnswerType::all();

        $question->delete();

        
        //return redirect()->route('admin.questions.index');
        return redirect()->route('admin.forms.edit',[$formId]);

    }
}
