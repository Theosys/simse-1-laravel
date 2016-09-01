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
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'HomeController@index');
    Route::get('/', 'HomeController@inicio');
    Route::get('/glosario', 'HomeController@glosario');
    Route::get('/normativas', 'HomeController@normativas');
    Route::get('/directorio', 'HomeController@directorio');
});


// //grupo de rutas accesibles para el publico, especialmente el login, registro y recuperacion de contraseña
// Route::group(['middleware' => ['web']], function () {
//   Route::auth();
//Route::get('/', function () {
//       return view('admin');
//   });

// });

//grupo de rutas que necesitan autentificacion
Route::group(['middleware' => ['web', 'auth']], function () {

  Route::resource('cuestionarios', 'CuestionariosController');

  Route::resource('listarenc', 'EncuestasController@listarenc');
  Route::resource('listarpreg', 'EncuestasController@listarpreg');//ruta de prueba
  Route::post('cuestionario', 'EncuestasController@cuestionario');
  Route::get('cuestionario', 'EncuestasController@cuestionario');
  Route::get('actualizar/{operador}/{encuesta}', 'EncuestasController@edit');
  Route::put('upd','EncuestasController@update');
  Route::get('cargaroperadores', 'EncuestasController@operador');//para completar select
  Route::get('respuestas','EncuestasController@respuestas');

  Route::get('/home', 'HomeController@index');

  
  Route::resource('encuestas', 'EncuestasController');
  Route::post('encuestas1/guardar', ['as' => 'encuestas1.guardar', 'uses' => 'EncuestasController@guardar']);
  //modulo admin

  Route::resource('listarenc', 'EncuestasController@listarenc');
  Route::resource('listarpreg', 'EncuestasController@listarpreg');
  Route::post('cuestionario', 'EncuestasController@cuestionario');
  Route::get('cargaroperadores', 'EncuestasController@operador');
  Route::get('encuestaoperador','EncuestasController@getopenc');

});

Route::group(['middleware' => ['api', 'auth']], function () {
  Route::get('api/departamentos', 'DepartamentosController@index');
  Route::get('api/provincias', 'ProvinciasController@index');
  Route::get('api/distritos', 'DistritosController@index');
});

Route::group(['middleware' => ['web', 'auth', 'monitor']], function () {
  Route::get('pruebas', 'UsuariosController@index');
});

Route::group(['middleware' => ['web', 'auth', 'administrador']], function () {
  Route::resource('usuarios', 'UsuariosController');  
  Route::resource('operadores', 'OperadoresController');   
  Route::get('encuestas1/cobertura', 'EncuestasController@cobertura');  
  Route::get('encuestas1/listar', 'EncuestasController@listar');
  Route::resource('reportes', 'ReportesController'); 
  Route::resource('planseguimientos', 'PlanSeguimientosController');
  Route::get('planseg/contenidos', 'PlanSeguimientosController@contenidos');
  Route::get('planseg/{id}', 'PlanSeguimientosController@editarconte');  
  Route::resource('objetivosnacionales', 'ObjetivosNacionalesController');
  Route::resource('objetivosestrategicos', 'ObjetivosEstrategicosController');
  Route::resource('objetivosespecificos', 'ObjetivosEspecificosController');
  Route::resource('acciones', 'AccionesController'); 

  Route::resource('preguntas', 'PreguntasController');
  Route::resource('subpreguntas', 'SubpreguntasController');
  Route::get('subpreg/{id}', 'SubpreguntasController@listar');
  Route::get('subpreg/{id}/agregar', 'SubpreguntasController@agregar');
  Route::get('subpreg/{id}/editar', 'SubpreguntasController@edit');
  Route::resource('cuestionarios', 'CuestionariosController');
  Route::resource('versiones', 'CuestionarioVersionesController');    
  Route::resource('estruccuest', 'EstrucCuestionariosController');
  Route::post('estruccuest/eliminar', ['as' => 'estruccuest.eliminar', 'uses' => 'EstrucCuestionariosController@eliminar']);
});

Route::group(['middleware' => ['api', 'auth', 'administrador']], function () {
  Route::resource('api/contactos', 'ContactosController');
  Route::resource('api/usuarios', 'UsuariosApiController');
});
