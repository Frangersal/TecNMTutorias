<?php

namespace App\Http\Controllers\Admin\Chart;

use App\Form;
use App\Question;
use App\Answer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class generalSYController extends Controller
{
    
    public function _construct()
    {
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
        return view('admin.charts.specificYear.general.index')->with('questions',$questions);
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
        $questions = Question::where('id', $id)->get();

        $data      = DB::select('SELECT DISTINCT name, COUNT(name) as repetido  FROM answers WHERE question_id='.$id.' GROUP BY name');
        
        // $dataArray = json_encode($data, true);
        // var_dump($dataArray[0]);

        $labels = array();
        $datas = array();

        foreach($data as $registro){
            array_push($labels, $registro->name);
        }
        
        foreach($data as $registro){
            array_push($datas, $registro->repetido);
        }
        //var_dump($datas);die;
        //var_dump($labels);
        
        return view('admin.charts.specificYear.general.show',['datas'=>json_encode($datas), 'labels'=>json_encode($labels)]) 
        ->with('questions',$questions);
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
