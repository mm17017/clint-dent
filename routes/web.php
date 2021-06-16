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
Route::get('/inicio','InicioController@index')->name('inicio');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/usuario','UserController@vista')->name('usuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function (){
    Route::apiResource('/detalle', 'DetalleCitaController');
    Route::apiResource('/estadocita','EstadoCitaController');
    Route::apiResource('/jornada','JornadaController');
    Route::apiResource('/user','UserController');

    Route::get('/servicios', 'DetalleCitaController@getServicios')->name('servicios');
    Route::get('/jornadas/{id}', 'DetalleCitaController@getJornadas')->name('jornadas');
});

Route::post('/post', 'DetalleCitaController@store');

/*Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
     return "Cache is cleared";
     });
     
     Preguntar a margueiz, ya que esta ruta esta duplicada, y desconozco como adaptarlo para hacer un testing
     */