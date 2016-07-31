<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pregunta;
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
      $pregunta->I_CODPREG = 500;
      $pregunta->I_NUMPREG = 500;
      $pregunta->V_DESPREG = $request->v_despreg;
      $pregunta->V_RESUMEN = $request->v_resumen;
      $pregunta->I_CODTIPO = $request->i_codtipo;
      $pregunta->I_CODINST = 1;
      $pregunta->I_CODTIPCLAS = $request->i_codtipclas;
      $pregunta->I_VERIFICA = 1;
      $pregunta->I_USUREG = 1;
      $pregunta->I_USUMOD = 1;
      $pregunta->I_ESTREG = 1;
      $pregunta->save();
      //dd($user);
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
        $tipoPreguntaClase = TipoPreguntaClase::all('I_CODTIPCLAS', 'V_DESTIPOCLAS');
        $tipoPregunta = TipoPregunta::all('I_CODTIPO', 'V_DESTIPO');
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
        $pregunta->V_DESPREG = $request->v_despreg;
        $pregunta->V_RESUMEN = $request->v_resumen;
        $pregunta->I_CODTIPO = $request->i_codtipo;
        $pregunta->I_CODTIPCLAS = $request->i_codtipclas;
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
        $pregunta->delete();
        return redirect()->action('PreguntasController@index');
    }
}
