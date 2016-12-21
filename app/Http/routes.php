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

// Sobreescribiendo las rutas para el Registro de Laravel
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::get('/admin', 'HomeController@index');
    Route::get('/', 'HomeController@inicio');
    Route::get('/glosario', 'HomeController@glosario');
    Route::get('/normativas', 'HomeController@normativas');
    Route::get('/directorio', 'HomeController@directorio');
    Route::get('/directorio_grd', 'HomeController@directorio_grd');
    Route::get('/directorio_mapas', 'HomeController@directorio_mapas');
    Route::get('/contacto', 'HomeController@contacto');    
    Route::get('/estadistica', 'HomeController@estadistica');    
    Route::post('contact/guardar', ['as' => 'contacto.guardar', 'uses' => 'HomeController@guardar']);
    Route::get('/api/operadores', 'OperadoresController@listarpreg');
    //recordar redireccionar el route register ->registrarme

    Route::get('/registrarme', function(){
      return view('usuarios.request',['method'=>'POST','url'=>'registrarme','disabled_input_username'=>0]);
    });
    Route::post('/registrarme', 'UsuariosController@registraranonimo');
    Route::get('/registrado/{bitmsg}',function($bitmsg){
      $msg = ($bitmsg==1)?'Su usuario ha sido creado correctamneto. Verificaremos sus datos y le enviareamos un email indicandole cuándo podrá ingresar':'No se ha podido crear su usuario, favor de escribirnos al correo aaaa@bbbbbbbb.gob.pe';
      return redirect('/login')->with($msg);
    });
    
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
  Route::resource('miperfil', 'PerfilController');
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
  


//en el STB
  Route::get('encuestas/{i_codopera}/{i_codenc}', 'EncuestasController@edit');
  Route::resource('encuestasABC', 'EncuestasABCController');

  Route::get('showfile/{filename}',function($filename){
    if(Storage::disk('archivos_encuesta')->exists($filename)){
      $path = storage_path('app\\archivos_encuesta\\'.$filename);
      $mime =Storage::disk('archivos_encuesta')->mimeType($filename);
      return Response::make(file_get_contents($path), 200, [
          'Content-Type' => $mime,
          'Content-Disposition' => 'inline; filename="'.$filename.'"'
      ]);
    }
  });



  //modulo admin
  Route::resource('listarenc', 'EncuestasController@listarenc');
  Route::resource('listarpreg', 'EncuestasController@listarpreg');
  Route::post('cuestionario', 'EncuestasController@cuestionario');
  Route::get('cargaroperadores', 'EncuestasController@operador');
  Route::get('encuestaoperador','EncuestasController@getopenc');

  Route::post('/api/encuestafile','EncuestasFileController@upload');

});
//Route::group(['middleware' => ['api', 'auth']], function () {
Route::group(['middleware' => ['api',]], function () {
  Route::get('api/departamentos', 'DepartamentosController@index');
  Route::get('api/provincias', 'ProvinciasController@index');
  Route::get('api/distritos', 'DistritosController@index');
});
Route::group(['middleware' => ['web', 'auth', 'monitor']], function () {
  Route::get('pruebas', 'UsuariosController@index');
});
Route::group(['middleware' => ['web', 'auth', 'administrador']], function () {  
  Route::delete('usuarios', 'UsuariosController@destroy');  
  Route::resource('usuarios', 'UsuariosController');
  Route::delete('operadores', 'OperadoresController@destroy');  
  Route::resource('operadores', 'OperadoresController');   
  Route::get('enc/cobertura', 'EncuestasController@cobertura');    
  Route::get('enc/listar', 'EncuestasController@listar');
  Route::get('enc/{id}/editar', 'EncuestasController@editar');  
  Route::get('enc/{id}/indpreg', 'EncuestasController@indpreg');  
  Route::post('enc/guardar', ['as' => 'enc.guardar', 'uses' => 'EncuestasController@guardar']);
  Route::post('enc/actualizar', ['as' => 'enc.actualizar', 'uses' => 'EncuestasController@actualizar']);
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
  Route::resource('alternativas', 'AlternativasController');  
  Route::get('alter/{id}', 'AlternativasController@listar');
  Route::get('alter/{id}/agregar', 'AlternativasController@agregar');  
  Route::resource('subalternativas', 'SubalternativasController');  
  Route::get('subalter/{id}', 'SubalternativasController@listar');
  Route::get('subalter/{id}/agregar', 'SubalternativasController@agregar');
  Route::get('subalter/{id}/editar', 'SubalternativasController@edit');
  Route::resource('cuestionarios', 'CuestionariosController');
  Route::resource('versiones', 'CuestionarioVersionesController');    
  Route::resource('estruccuest', 'EstrucCuestionariosController');
  Route::post('estruccuest/eliminar', ['as' => 'estruccuest.eliminar', 'uses' => 'EstrucCuestionariosController@eliminar']);
  Route::resource('personas', 'PersonasController');
  Route::get('personas/{oper}/{accion}', ['as' => 'personas.crear_lista', 'uses' => 'PersonasController@crear_lista']);
  Route::post('estruccuest/index', ['as' => 'estruccuest.index', 'uses' => 'EstrucCuestionariosController@index']);
});
Route::group(['middleware' => ['api', 'auth', 'administrador']], function () {
  Route::resource('api/contactos', 'ContactosController');
  Route::resource('api/usuarios', 'UsuariosApiController');

});