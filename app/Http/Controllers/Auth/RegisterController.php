<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
///use App\Pupil;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'campus' => ['required', 'string', 'max:255'],
            'faculty' => ['required', 'string', 'max:255'],
            'controlNumber' => ['required', 'numeric', 'min:8', 'unique:users'],

            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();

        $profileImage = $request->file('profile_picture');
        $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();

        $upload_path = 'images/profile_images/';
        $profile_image_url = $upload_path . $profileImageSaveAsName;
        $success = $profileImage->move($upload_path, $profileImageSaveAsName);

        $student = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

            'campus' => $data['campus'],
            'faculty' => $data['faculty'],
            'controlNumber' => $data['controlNumber'],
            'picture' => $profile_image_url,

           
        ]);
/*
        Pupil::create([
            'coment' => 'Nada poh',
            'user_id' => DB::table('users')->where('id')->last(),
            'tutor_id' => '1',

           
        ]);
*/
        $role = Role::select('id')->where('name','student')->first();
        $student->roles()->attach($role);

        return $student;
    }
}
