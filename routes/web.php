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


Route::resource('generations','GenerationController');
Route::resource('generation_scheduals','GenerationSchedualController');

Route::resource('courses','CoursesController');
Route::resource('rooms','RoomController');
Route::resource('enseignants','EnseignantController');
Route::resource('seances','SeanceController');

Route::get('/', function () {
    return view('welcome');
});
