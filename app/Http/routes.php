<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//grupo de rutas accesibles para el publico, especialmente el login, registro y recuperacion de contraseña
Route::group(['middleware' => ['web']], function () {

  Route::get('/', function () {
      return view('welcome');
  });

  Route::auth();

});

//grupo de rutas que necesitan autentificacion
Route::group(['middleware' => ['web', 'auth']], function () {

  Route::get('/home', 'HomeController@index');

  Route::resource('preguntas', 'PreguntasController');
  Route::resource('cuestionarios', 'CuestionariosController');

});