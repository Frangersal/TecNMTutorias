<?php

namespace App\Http\Controllers\Admin;

use App\Form;
use App\Question;
use App\Option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OptionsController extends Controller
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
        //var_dump($question_id); die();
        //$id_question = Question::find($question_id);        
        $options = Option::all();
        //$answers_options->question_id = $request->get('idQuestion');
        
        
        return view('admin.options.index')->with('options',$options);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   //
        $forms = Form::all();
        $questions = Question::all();
        $options = Option::all();
        return view('admin.options.create')->with('forms',$forms)->with('questions',$questions)->with('options',$options);
    }

    /**
     * Store a newly created resource in storage.,
     *->with('id_question',$id_question)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request->get('idQuestion')); die();
        
        $request->validate([
            'txtName'=>'required',
        ]);

        $option = new Option([
            'name' => $request->get('txtName'),
            'question_id' => $request->get('txtIdQuestion'),
            
        ]);
 
        $option->save();
        return redirect()->route('admin.options.index');
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
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        $questions = Question::all();
        //$options = Option::all();
        var_dump($option); 

        return view('admin.options.edit')->with('questions',$questions)->with('option',$option);
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
        $request->validate([
            'name'=>'required',
            //'question_id'=>'required',
        ]);

        $option = Option::find($id);
        $option->name = $request->get('txtName');
        $option->question_id= $request->get(1);
        $option->update();

        return redirect()->route('admin.options.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
        $option->delete();

        return redirect()->route('admin.options.index');
    }
}
