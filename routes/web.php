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