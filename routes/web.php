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
use App\Mail\schedual;
use Illuminate\Support\Facades\Mail; 
Route::resource('scheduals','SchedualController');
Route::resource('generations','GenerationController');
Route::resource('generation_scheduals','GenerationSchedualController');

Route::resource('courses','CoursesController');
Route::resource('rooms','RoomController');
Route::resource('enseignants','EnseignantController');
Route::resource('seances','SeanceController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/email', function () {

 Mail::to('chrif_zahar@gmail.com')->send(new schedual());
  Mail::to('alaa_sahraoui@gmail.com')->send(new schedual());
  Mail::to('nabil@gmail.com')->send(new schedual());
   
    return new schedual();

});


Route::get('/scheduals/info/l2/section/1', function () {
    return view('scheduals.l2_sec1');
});

Route::get('/scheduals/info/l2/section/2', function () {
    return view('scheduals.l2_sec2');
});

Route::get('/scheduals/info/l3/siq', function () {
    return view('scheduals.l3_siq');
});



Route::get('/scheduals/info/l3/isil', function () {
    return view('scheduals.l3_isil');
});
