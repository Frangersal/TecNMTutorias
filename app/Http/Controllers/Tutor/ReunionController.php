<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;
use App\Tutor;
use App\Pupil;
use App\Reunion;
use Gate;

class ReunionController extends Controller
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
        $user_id    = auth()->id();        
        $tutor      = DB::table('tutors')->whereUser_id($user_id)->first(); 
        $tutor_id   = $tutor->id; 

        $reunions   = Reunion::all();
        return view('tutor.pupil.reunion.index')->with('tutor_id',$tutor_id)->with('reunions',$reunions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ojo, solo el tutor va a crear la reunion, de hacerlo el admin, deja de tener sentido este codigo
        $user_id    = auth()->id();        
        $tutor      = DB::table('tutors')->whereUser_id($user_id)->first(); // asi es como se saca el array chingon. xd
        $tutor_id   = $tutor->id; 
        //var_dump($tutor_id); die();
        $pupils     = Pupil::all(); 
        // var_dump($pupils); die();

        return view('tutor.pupil.reunion.create')
        ->with('tutor_id',$tutor_id)->with('pupils',$pupils);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'txtDate_time'=>'required',
            'txtDescription'=>'required',
        ]);

        $reunion = new Reunion([
            'date_time'     => $request->get('txtDate_time'),
            'description'   => $request->get('txtDescription'),
            'pupil_id'      => $request->get('txtPupil'),
            'tutor_id'      => $request->get('txtTutor'),
        ]);
 
        $reunion->save();
        return redirect()->route('tutor.pupil.reunion.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reunion $reunion)
    {
        //Ojo, solo el tutor va a crear la reunion, de hacerlo el admin, deja de tener sentido este codigo
        $user_id    = auth()->id();        
        $tutor      = DB::table('tutors')->whereUser_id($user_id)->first(); // asi es como se saca el array chingon. xd
        $tutor_id   = $tutor->id; 
        //var_dump($tutor_id); die();
        $pupils     = Pupil::all(); 
        // var_dump($pupils); die();

        return view('tutor.pupil.reunion.edit')->with('reunion',$reunion)->with('tutor_id',$tutor_id)->with('pupils',$pupils);
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
        $request->validate([
            'txtDate_time'=>'required',
        ]);

        $reunion = Reunion::find($id);

        $reunion->date_time     = $request->get('txtDate_time');
        $reunion->description   = $request->get('txtDescription');
        $reunion->pupil_id      = $request->get('txtPupil');
        $reunion->tutor_id      = $request->get('txtTutor');

        $reunion->update();

        return redirect()->route('tutor.pupil.reunion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reunion $reunion)
    {
        $reunion->delete();

        return redirect()->route('tutor.pupil.reunion.index');
    }
}
