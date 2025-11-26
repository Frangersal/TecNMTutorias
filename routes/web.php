<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ---- Custom routes converted for Laravel 10 (class-based controllers) ----

// Simple view routes (public)
Route::get('/index', function () {
    return view('index');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/perfil/forms', function () {
    return view('forms');
});

// Group routes that require authentication (Breeze uses 'auth')
Route::middleware('auth')->group(function () {
    // PDF resource under users prefix (Tutor namespace)
    Route::prefix('users')->name('pdf.')->middleware('can:manage-users')->group(function(){
        Route::resource('/users', App\Http\Controllers\Tutor\PDFController::class);
    });

    // Perfil
    Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');

    // ------ Admin cruds ------ //
    Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
        // Users
        Route::resource('/users', App\Http\Controllers\Admin\UsersController::class)
            ->except(['show','create','store']);

        // Forms
        Route::resource('/forms', App\Http\Controllers\Admin\FormsController::class)
            ->except(['show']);

        // Questions
        Route::resource('/questions', App\Http\Controllers\Admin\QuestionsController::class);

        // Options
        Route::resource('/options', App\Http\Controllers\Admin\OptionsController::class);

        // Chart (Admin)
        Route::resource('/chart', App\Http\Controllers\Admin\ChartsController::class);
    });

    // Admin Chart sub-namespaces
    Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
        Route::resource('/chart/specificyear', App\Http\Controllers\Admin\Chart\specificYearController::class);
        Route::resource('/charts/specificYear/general', App\Http\Controllers\Admin\Chart\generalSYController::class)->names('charts.specificYear.general');
    });

    // Charts (general)
    Route::prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
        Route::resource('/charts', App\Http\Controllers\Chart\ChartController::class);
        Route::resource('/specificYear', App\Http\Controllers\Chart\ChartController::class);
        Route::resource('/specificYear/forms', App\Http\Controllers\Chart\ChartController::class);
    });

    // Users: Pupils and Tutors
    Route::prefix('users')->name('users.')->middleware('can:manage-users')->group(function(){
        Route::resource('/pupil', App\Http\Controllers\Pupil\PupilController::class);
        Route::resource('/tutor', App\Http\Controllers\Tutor\TutorController::class);
    });

    // Assign tutor
    Route::prefix('users/pupil')->name('users.pupil.')->middleware('can:manage-users')->group(function(){
        Route::resource('/asignar', App\Http\Controllers\Pupil\AsignarTutorController::class);
    });

    // Tutor area: reunions, forms, answers
    Route::prefix('tutor/pupils')->name('tutor.pupil.')->middleware('can:manage-users')->group(function(){
        Route::resource('/reunion', App\Http\Controllers\Tutor\ReunionController::class);
        Route::resource('/form', App\Http\Controllers\Tutor\FormController::class);
    });

    Route::prefix('tutor/pupil/forms')->name('tutor.pupil.form.')->middleware('can:manage-users')->group(function(){
        Route::resource('/answer', App\Http\Controllers\Tutor\AnswerController::class);
    });

    // Student area
    Route::prefix('student')->name('student.')->middleware('can:student-action')->group(function(){
        Route::resource('/forms', App\Http\Controllers\Student\FormsController::class)->except(['destroy']);
        Route::resource('/answers', App\Http\Controllers\Student\AnswerController::class)->except(['destroy']);
    });

    // Chart (Chart namespace simplified)
    Route::prefix('chart')->name('chart.')->middleware('can:manage-users')->group(function(){
        Route::resource('/charts', App\Http\Controllers\Chart\ChartController::class);
    });
});

// NOTE: Auth routes are provided by Breeze in routes/auth.php (already required above)
