<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Role;
use App\User;
use App\UsuariosCrud;
use App\Tutor;
use App\Pupil;
use Gate;
use Datatables;

namespace App\Http\Controllers;

class AjaxUSERSCRUDController extends Controller
{
    public function save(Request $request){
        $validator = \Validator::make($request->all(),[
            'name'=>'required|string|max:255',
            'campus'=>'required|string|max:255',
            'faculty'=>'required|string|max:255',
            'controlNumber'=>'required|int|max:11',
            'email'=>'required|string|max:255',
            'picture'=>'required|image'
        ],[
            
            'name.required'=>'Requiere nombre del usuario',
            'name.string'=>'Nombre del usuario debe ser un string',
            'name.max'=>'Nombre del usuario debe ser menor a 155 caracteres',

            'campus.required'=>'Requiere nombre del campus',
            'campus.string'=>'Nombre del campus debe ser un string',
            'campus.max'=>'Nombre del campus debe ser menor a 155 caracteres',

            'faculty.required'=>'Requiere nombre del faculty',
            'faculty.string'=>'Nombre del faculty debe ser un string',
            'faculty.max'=>'Nombre del faculty debe ser menor a 155 caracteres',

            'controlNumber.required'=>'Requiere nombre del controlNumber',
            'controlNumber.string'=>'Nombre del controlNumber debe ser un int',
            'controlNumber.max'=>'Nombre del controlNumber debe ser menor a 11 caracteres',

            'email.required'=>'Requiere email del usuario',
            'email.string'=>'email del usuario debe ser un string',
            'email.max'=>'email del usuario debe ser menor a 155 caracteres',

            'picture.required'=>'User image is required',
            'picture.image'=>'User file debe ser una image',
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{
            $path = 'files/';
            $file = $request->file('picture');
            $file_name = time().'_'.$file->getClientOriginalName();

        //    $upload = $file->storeAs($path, $file_name);
        $upload = $file->storeAs($path, $file_name, 'public');

            if($upload){
                User::insert([
                    'name'=>$request->name,
                    'campus'=>$request->campus,
                    'faculty'=>$request->faculty,
                    'controlNumber'=>$request->controlNumber,
                    'email'=>$request->email,
                    'picture'=>$file_name,
                    
                ]);
                return response()->json(['code'=>1,'msg'=>'New user has been saved successfully']);
            }
        }
    } 


    public function fetchUsers(){
    $users = User::all();
    $data = \View::make('all_users')->with('users', $users)->render();
    return response()->json(['code'=>1,'result'=>$data]);
    }
}

/**
  
*   id

*   name
*   campus
*   faculty
*   controlNumber
*   email
*   picture
 **/

