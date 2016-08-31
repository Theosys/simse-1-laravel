<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Encuesta;
use App\Departamento;
use App\TipoOrganismo;
use App\Indicador;
use App\Alternativa;
use App\Respuesta;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $codenc = 10;
        $encuestas = Encuesta::all();
        $enc = Encuesta::find($codenc);
        $indicadores = $enc->indicadores->unique('i_codind')->sortBy('i_numind');
        $departamentos = Departamento::all()->lists('v_desdep','v_coddep');        
        $tiporganismos = TipoOrganismo::all()->lists('v_destiporg','i_codtiporg');
        $preguntas = $enc->preguntas;        
        $alternativas = Alternativa::all();
        $respuestas = Respuesta::where('i_codenc',$codenc)->get();
        //dd($preguntas);
        return view('reportes.index', ['encuestas'=>$encuestas,'indicadores'=>$indicadores,'preguntas'=>$preguntas,'departamentos'=>$departamentos,'tiporganismos'=>$tiporganismos, 'alternativas'=>$alternativas, 'respuestas'=>$respuestas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
