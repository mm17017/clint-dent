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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware'=>'auth'],function (){
    Route::apiResource('/detalle', 'DetalleCitaController');//->middleware('auth');
    Route::apiResource('/estadocita','EstadoCitaController');
    Route::apiResource('/jornada','JornadaController');
    Route::get('/servicios', 'DetalleCitaController@getServicios')->name('servicios');
// });

