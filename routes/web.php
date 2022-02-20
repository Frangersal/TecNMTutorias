<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/prueba', function () {
    return view('prueba');
});


// Inicio testBootstrap
Route::get('/remakeHome', 'RemakeController@remakeHome')->name('home');
Route::get('/remakeUsers', 'RemakeController@remakeUsers')->name('users');
Route::get('/remakeUsersdos', 'RemakeController@remakeUsersDos')->name('usersdos');
Route::get('/testBootstrap', 'RemakeController@remakeTestBS')->name('remakeTestBS');

Route::get('/perfil/forms', function () {
    return view('forms');
});

// Route::get('/pdf', 'Tutor\PDFController@PDF')->name('descargarPDF');
// Route::get('/pdf/{}', 'Tutor\PDFController@PDFformsStudent')->name('PDFformsStudent');

Route::namespace('Tutor')->prefix('users')->name('pdf.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users','PDFController');
});

Auth::routes();

// Inicio
Route::get('/home', 'HomeController@index')->name('home');

// ------ >> ------ Admin cruds ------ << ------ //
// Admin crud Usuarios
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users','UsersController', ['except'=>['show','create','store']]);
});

// Admin crud Froms
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['show',]]);
});

// Admin crud Question
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/questions','QuestionsController', ['except'=>['show',]]);
});

// Admin crud AnswerOption
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/options','OptionsController', ['except'=>['show',]]);
});

// ------ >> ------ Admin/Tutor Vista ------ << ------ //
// Pupilos
Route::namespace('Pupil')->prefix('users')->name('users.')->middleware('can:manage-users')->group(function(){
	Route::resource('/pupil','PupilController');
});
// Pupilos
Route::namespace('Tutor')->prefix('users')->name('users.')->middleware('can:manage-users')->group(function(){
	Route::resource('/tutor','TutorController');
});
// Asignar tutor users/pupil/asignarTutor
Route::namespace('Pupil')->prefix('users/pupil')->name('users.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/asignar','AsignarTutorController');
});
// ------ >> ------ Tutor Vista ------ << ------ //
// Reunion
Route::namespace('Tutor')->prefix('tutor/pupils')->name('tutor.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/reunion','ReunionController');
});
// Form
Route::namespace('Tutor')->prefix('tutor/pupils')->name('tutor.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/form','FormController');
});
// Answer tutor.answers.index  tutor.pupil.form.answer.index
Route::namespace('Tutor')->prefix('tutor/pupil/forms')->name('tutor.pupil.form.')->middleware('can:manage-users')->group(function(){
	Route::resource('/answer','AnswerController');
});


// ------ >> ------ Estudiante Vista ------ << ------ //
// Estudiante ve Form
Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['store','update','destroy']]);
});

// Estudiante ve Preguntas
Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/answers','AnswerController', ['except'=>['show','update','destroy']]);
});

// ------ >> ------ Admin/Tutor Chart ------ << ------ //
// Chart
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/chart','ChartsController');
});
// Chart specificYear
Route::namespace('Admin\Chart')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/chart/specificyear','specificYearController');
});
// Chart specificYear-> general
Route::namespace('Admin\Chart')->prefix('admin')->name('admin.charts.specificYear.')->middleware('can:manage-users')->group(function(){
	Route::resource('/charts/specificYear/general','generalSYController');
});


//Charts
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/charts','ChartController');
});
//charts/specificYear
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/specificYear','ChartController');
});
//charts/specificYear/general/forms
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/specificYear/forms','ChartController');
});


//charts/throughoutTheYears
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/throughoutTheYears','ChartController');
});
//charts/throughoutTheYears/forms
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/throughoutTheYears/forms','ChartController');
});


// Made with love, for my ITA <3  