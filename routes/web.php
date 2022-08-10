<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Auth;


Auth::routes();

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


// PERFIL
Route::get('/perfil', 'PerfilController@index')->name('perfil');

// ------ >> ------ Admin CRUDs ------ << ------ //
// Admin CRUD Usuarios
// /public/admin/users
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/users','UsersController', ['except'=>['show','create','store']]);
});

 
//Route::get('user', [AjaxUSERSCRUDController::class, 'index']);
//Route::post('store-user', [AjaxUSERSCRUDController::class, 'store']);
//Route::post('edit-user', [AjaxUSERSCRUDController::class, 'edit']);
//Route::post('delete-user', [AjaxUSERSCRUDController::class, 'destroy']);

Route::view('/userS','users');
Route::post('/save',[AjaxUSERSCRUDController::class,'save'])->name('save.user');
Route::get('/fetchUsers',[AjaxUSERSCRUDController::class,'fetchUsers'])->name('fetch.users');

// Admin CRUD Froms
// /public/admin/forms
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['show',]]);
});

// Admin CRUD Question
// /public/admin/questions
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/questions','QuestionsController', ['except'=>['show',]]);
});

// Admin CRUD AnswerOption
// /public/admin/options
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/options','OptionsController', ['except'=>['show',]]);
});

// ------ >> ------ Admin/Tutor Vista ------ << ------ //

// Pupilos
// /public/users/pupil
Route::namespace('Pupil')->prefix('users')->name('users.')->middleware('can:manage-users')->group(function(){
	Route::resource('/pupil','PupilController');
});

// Pupilos
// /public/users/tutor
Route::namespace('Tutor')->prefix('users')->name('users.')->middleware('can:manage-users')->group(function(){
	Route::resource('/tutor','TutorController');
});

// Asignar tutor 
// /public/users/pupil/asignar
Route::namespace('Pupil')->prefix('users/pupil')->name('users.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/asignar','AsignarTutorController');
});

// ------ >> ------ Tutor Vista ------ << ------ //

// Reunion
// /public/tutor/pupil/reunion
Route::namespace('Tutor')->prefix('tutor/pupils')->name('tutor.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/reunion','ReunionController');
});

// Form
// /public/tutor/pupil/form
Route::namespace('Tutor')->prefix('tutor/pupils')->name('tutor.pupil.')->middleware('can:manage-users')->group(function(){
	Route::resource('/form','FormController');
});

// Answer 
// /public/tutor/pupil/forms/answer
Route::namespace('Tutor')->prefix('tutor/pupil/forms')->name('tutor.pupil.form.')->middleware('can:manage-users')->group(function(){
	Route::resource('/answer','AnswerController');
});


// ------ >> ------ Estudiante Vista ------ << ------ //

// Estudiante ve Form
// /public/student/forms
Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/forms','FormsController', ['except'=>['store','update','destroy']]);
});

// Estudiante ve Preguntas
// /public/student/answers
Route::namespace('Student')->prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
	Route::resource('/answers','AnswerController', ['except'=>['show','update','destroy']]);
});

// ------ >> ------ Admin/Tutor Chart ------ << ------ //

// Chart
// /public/admin/chart
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/chart','ChartsController');
});

// Chart specificYear
// /public/admin/chart/specificyear
Route::namespace('Admin\Chart')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
	Route::resource('/chart/specificyear','specificYearController');
});

// Chart specificYear-> general
// /public/admin/chart/specificyear/general
Route::namespace('Admin\Chart')->prefix('admin')->name('admin.charts.specificYear.')->middleware('can:manage-users')->group(function(){
	Route::resource('/charts/specificYear/general','generalSYController');
});


//Charts
// /public/chart/charts
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/charts','ChartController');
});

//charts/specificYear
// /public/chart/specificYear
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/specificYear','ChartController');
});

// charts/specificYear/general/forms
// /public/chart/specificYear/forms
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/specificYear/forms','ChartController');
});


// /public/charts/throughoutTheYears
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/throughoutTheYears','ChartController');
});

// /public/charts/throughoutTheYears/forms
Route::namespace('Chart')->prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
	Route::resource('/throughoutTheYears/forms','ChartController');
});

//-------------REDISEÑO DE RUTAS--------------------



// Made with love, for my ITA <3  