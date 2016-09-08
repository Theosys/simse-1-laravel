<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pregunta;
use App\Alternativa;
use App\TipoPregunta;
use App\TipoPreguntaClase;
use Auth;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $preguntas = Pregunta::all();
      return view('preguntas.index', ['preguntas' => $preguntas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tipoPreguntaClase = TipoPreguntaClase::all();
      $tipoPregunta = TipoPregunta::all();
      return view('preguntas.create', ['tipoPreguntaClase' => $tipoPreguntaClase, 'tipoPregunta' => $tipoPregunta]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = Auth::user();
      $pregunta = new Pregunta;
      $pregunta->i_numpreg = 0;
      $pregunta->v_despreg = $request->v_despreg;
      $pregunta->v_resumen = $request->v_resumen;
      $pregunta->i_codtipo = $request->i_codtipo;
      $pregunta->i_codtipclas = $request->i_codtipclas;
      $pregunta->i_verifica = 1;
      $pregunta->i_usureg = $user->id;
      $pregunta->i_usumod = $user->id;
      $pregunta->i_codinst = 1;
      $pregunta->i_estreg = 1;
      $pregunta->save();
      $pregunta->i_numpreg = $pregunta->i_codpreg;
      $pregunta->save();
      if ($request->i_codtipo==1) 
      {
        $alter = new Alternativa;        
        $alter->pregunta()->associate($pregunta);
        $alter->v_desalt="p.a";
        $alter->save();
      }
      return redirect()->action('PreguntasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);
        $tipoPreguntaClase = TipoPreguntaClase::all('i_codtipclas', 'v_destipoclas');
        $tipoPregunta = TipoPregunta::all('i_codtipo', 'v_destipo');
        return view('preguntas.edit', ['pregunta' => $pregunta, 'tipoPreguntaClase' => $tipoPreguntaClase, 'tipoPregunta' => $tipoPregunta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->v_despreg = $request->v_despreg;
        $pregunta->v_resumen = $request->v_resumen;
        $pregunta->i_codtipo = $request->i_codtipo;
        $pregunta->i_codtipclas = $request->i_codtipclas;
        $pregunta->i_usumod = Auth::user()->id;
        $pregunta->save();
        return redirect()->action('PreguntasController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->subpreguntas()->delete();
        //falta eliminar alternativas de subpregunta relacionada  
        //foreach ($pregunta->subpreguntas()->get() as $subpreg) {
        //   $subpreg->alternativas()->delete();
        // }        
        $pregunta->alternativas()->delete();
        $pregunta->delete();
        return redirect()->action('PreguntasController@index');
    }
}
