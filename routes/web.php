<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil/forms', function () {
    return view('forms');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users','UsersController', ['except'=>['show','create','store']]);
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['show',]]);
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/questions','QuestionsController', ['except'=>['show',]]);
});



// AnswerOption
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/options','OptionsController', ['except'=>['show',]]);
});



Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['destroy']]);
});

Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/answers','AnswerController', ['except'=>['destroy']]);
});

//