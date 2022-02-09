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
Route::get('/', 'App\Http\Controllers\filmController@index' );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pregled','App\Http\Controllers\filmController@pregled' );
Route::get('/unos', 'App\Http\Controllers\filmController@unos' );
Route::get('/unos', 'App\Http\Controllers\filmController@brisanje' );
Route::post('store','App\Http\Controllers\filmController@store');
Route::get( '/delete/{id}','App\Http\Controllers\filmController@destroy' );
Route::get('/show/{slovo}','App\Http\Controllers\filmController@slovo');
Route::get('/show','App\Http\Controllers\filmController@index');