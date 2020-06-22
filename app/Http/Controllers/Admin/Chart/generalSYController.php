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

        //---- En un arreglo con 2 dim
        ///*
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
        //*/

        //-- En dos arreglos
        /*
        $dataName       = DB::select('SELECT DISTINCT name FROM answers WHERE question_id='.$id.'');
        $dataRepetido   = DB::select('SELECT COUNT(name) as repetido FROM answers WHERE question_id='.$id.' GROUP BY name');
        
        $nameArray = json_encode($dataName, true);
       
        $repetidoArray = json_encode($dataRepetido, true);

        //extract($row);
        
        //while ($row = $dataName) {
            # code...
        //}

        var_dump($nameArray); var_dump($repetidoArray); //die(); 
        return view('admin.charts.specificYear.general.show',['nameArray'=>$nameArray,'repetidoArray' => $repetidoArray]) 
        ->with('questions',$questions);
        //*/

/*
        $answerName = Answer::where('question_id', $id)->get();

        $answerName = New Answer;
        $answerName->labels($answerName->keys());
        $answerName->dataset('name','bar', $answerName->values());

        $answerRepetition
        $answerRetetition 
        //SELECT DISTINCT name, COUNT(name) as repetido 
        //FROM answers WHERE question_id='2' GROUP BY name
        
        
        $viewer = View::select(DB::raw("SUM(numberofview) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $viewer = array_column($viewer, 'count');
        
        $answer = Answer::select(DB::raw("SUM(name) as count"))
                                    //->orderBy("created_at")
                                    ->groupBy(DB::raw("year(created_at)"))
                                    ->get()->toArray();
        $answer = array_column($answer, 'count');
        

        return view('admin.charts.specificYear.general.show')->with('questions',$questions)
                ->with('answer',json_encode($answer,JSON_NUMERIC_CHECK));
                
*/
            

        //return view('admin.charts.specificYear.general.show')->with('questions',$questions);
        


        //------------------
        //$questions = Question::where('id', $id)->get();
        //return view('admin.charts.specificYear.general.show')->with('questions',$questions);
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
