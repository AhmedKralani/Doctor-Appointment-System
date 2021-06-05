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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth','admin']],function(){
Route::resource('doctor', 'DoctorController');
Route::resource('doctor', 'App\Http\Controllers\DoctorController');
});
Route::resource('appointment','App\Http\Controllers\AppointmentController');
Route::post('/appointment/check','AppointmentController@check')->name('appointment.check');
Route::post('/appointment/update','AppointmentController@updateTime')->name('update');

