<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pregunta;
use App\Subpregunta;
use App\TipoPreguntaClase;
use App\TipoPregunta;
use Auth;

class SubpreguntasController extends Controller
{
    //
    public function index()
    {
      $subpreguntas = Subpregunta::all();
      //$subpreguntas = Pregunta::find(1)->subpreguntas;
      return view('subpreguntas.index', ['subpreguntas' => $subpreguntas]);
    }

    public function create(Request $request)
    {      
      $tiposubpreguntaClase = TipoPreguntaClase::all();
      $tiposubpregunta = TipoPregunta::all();
      return view('subpreguntas.create', ['tiposubpreguntaClase' => $tiposubpreguntaClase, 'tiposubpregunta' => $tiposubpregunta]);
    }
    public function listar($id)
    {
      $subpreguntas = Subpregunta::where('i_codpreg',$id)->get();      
      return view('subpreguntas.index', ['subpreguntas'=>$subpreguntas]);
    }
    public function agregar($id)
    {
      $subpreguntas = Subpregunta::where('i_codpreg',$id)->get();      
      $tiposubpreguntaClase = TipoPreguntaClase::all();
      $tiposubpregunta = TipoPregunta::all();
      return view('subpreguntas.create', ['subpreguntas'=>$subpreguntas, 'tiposubpreguntaClase' => $tiposubpreguntaClase, 'tiposubpregunta' => $tiposubpregunta,'idpregunta'=>$id]);
    }
    
    public function store(Request $request)
    {
      $user = Auth::user();
      $subpregunta = new Subpregunta;      
      $subpregunta->v_dessubpreg = $request->v_dessubpreg;      
      $subpregunta->v_resumen = $request->v_resumen;
  	  $subpregunta->i_codtipo = $request->i_codtipo;
  	  $subpregunta->i_codpreg = $request->i_codpreg;	  
  	  $subpregunta->i_codtipclas = $request->i_codtipclas;
  	  $subpregunta->i_verifica	= $request->i_verifica;
  	  $subpregunta->i_usureg = $user->id;
  	  $subpregunta->i_usumod = $user->id;
  	  $subpregunta->i_estreg = 1;	  
      $subpregunta->save();                  
      return redirect()->back();
    }

     public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $preguntas = Pregunta::all();
        $subpregunta = Subpregunta::find($id);
        $tiposubpreguntaClase = TipoPreguntaClase::all('i_codtipclas', 'v_destipoclas');
        $tiposubpregunta = TipoPregunta::all('i_codtipo', 'v_destipo');
        return view('subpreguntas.edit', ['preguntas' => $preguntas, 'subpregunta' => $subpregunta, 'tiposubpreguntaClase' => $tiposubpreguntaClase, 'tiposubpregunta' => $tiposubpregunta]);
    }

    public function update(Request $request, $id)
    {
        $subpregunta = Subpregunta::find($id);
        $subpregunta->v_dessubpreg = $request->v_dessubpreg;      
      	$subpregunta->v_resumen = $request->v_resumen;
	  	$subpregunta->i_codtipo = $request->i_codtipo;
	  	$subpregunta->i_codpreg = $request->i_codpreg;	  
	  	$subpregunta->i_codtipclas = $request->i_codtipclas;
	  	$subpregunta->i_verifica	= $request->i_verifica;
        $subpregunta->i_usumod = Auth::user()->id;
        $subpregunta->save();        
        return redirect()->action('PreguntasController@index');        
    }
  
    public function destroy($id)
    {
        $subpregunta = Subpregunta::find($id);
        $subpregunta->delete();
        return redirect()->back();
        //return redirect()->action('SubpreguntasController@index');
    }
}
