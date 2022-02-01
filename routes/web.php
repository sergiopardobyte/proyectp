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

Auth::routes();

Route::get('/carreras/marketing', function () {
    return view('/carreras/marketing');
});


Route::get('/carreras/desarrollo', function () {
    return view('/carreras/desarrollo');
});

Route::get('/carreras/administracion', function () {
    return view('/carreras/administracion');
});

Route::get('/carreras/contabilidad', function () {
    return view('/carreras/contabilidad');
});
Route::resource('students', App\Http\Controllers\StudentController::class)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('teacher', App\Http\Controllers\TeacherController::class)->middleware('auth');
Route::resource('career', App\Http\Controllers\CareerController::class)->middleware('auth');
Route::resource('subjects', App\Http\Controllers\SubjectController::class)->middleware('auth');
Route::resource('semesters', App\Http\Controllers\SemesterController::class)->middleware('auth');
Route::resource('modules', App\Http\Controllers\ModuleController::class)->middleware('auth');
Route::resource('section', App\Http\Controllers\SectionController::class)->middleware('auth');
