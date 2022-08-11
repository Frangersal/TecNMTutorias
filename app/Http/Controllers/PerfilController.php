<?php

namespace App\Http\Controllers;

use App\User;
use App\Tutor;
use App\Pupil;
use App\Reunion;
use Gate;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Iniciar como admin
        if(Gate::denies('tutor-student-action')) { 
            $user_id    = auth()->id();

            $pupils     = Pupil::all();
            $users      = User::all();
            $reunions   = Reunion::all();

            return view('perfil')->with('users',$users)->with('pupils',$pupils)->with('reunions',$reunions);
        }

        //Iniciar como tutor
        if(Gate::denies('admin-student-action')) { 
            $user_id    = auth()->id();   
            $tutor      = DB::table('tutors')->whereUser_id($user_id)->first(); 
            $tutor_id   = $tutor->id;

            $pupils     = Pupil::all();
            $users      = User::all();
            $reunions   = Reunion::all();

            return view('perfil')->with('tutor_id',$tutor_id)->with('users',$users)->with('pupils',$pupils)->with('reunions',$reunions);
        }

        //Iniciar como student
        if(Gate::denies('admin-tutor-action')) { 
            //Obtener el id de pupilo del usuario student
            $user_id    = auth()->id();  
            $pupil      = DB::table('pupils')->whereUser_id($user_id)->first(); 
            $pupil_id   = $pupil->id;

            //Obtener el nombre del tutor del usuario
            $pupilFila      = DB::table('pupils')->whereId($pupil_id)->first(); 
            $idTutor        = $pupilFila->tutor_id;
            $tutorTutorFila      = DB::table('tutors')->whereId($idTutor )->first(); 
            $idUserDelTutor = $tutorTutorFila->user_id;
            $tutorFila     = DB::table('users')->whereId($idUserDelTutor )->first(); 
            $nombreTutor    = $tutorFila->name;
            // var_dump($nombreTutor);  die();

            $users = User::all();
            $pupils = Pupil::all();
            $reunions = Reunion::all();
            return view('perfil')
            ->with('pupil_id',$pupil_id)->with('users',$users)->with('nombreTutor',$nombreTutor)
            ->with('pupils',$pupils)->with('reunions',$reunions);
        }
    }
}