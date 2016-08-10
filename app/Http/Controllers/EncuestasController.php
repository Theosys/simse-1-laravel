<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicador;
use App\Encuesta;
use App\TipoOrganismo;
use App\Operador;
use App\Pregunta;
use App\EncuestaOperador;
use Auth;


class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::get()->sortByDesc('created_at')->lists('v_desenc','i_codenc');
        $tipoOrganismos = TipoOrganismo::get()->lists('v_destiporg','i_codtiporg'); 
        $encuestasOperador = EncuestaOperador::where('i_codopera',499)->get();
        return response()
            ->view('encuestas/index', ['encuestas'=>$encuestas, 'tipoOrganismos'=>$tipoOrganismos, 'encuestasOperador'=>$encuestasOperador]);
    }

    public function getopera(Request $request){
        $tiporg = $request->tiporg;
        $operadores = Operador::where('i_codtiporg',$tiporg)->get(['i_codopera','v_desoperador'])->sortBy('v_desoperador'); 
        return $operadores->toJson();
    }

    public function listarenc(){
        $indicadores = Indicador::where('i_usumod',1)->get()->sortBy('i_numind');
        //$pregunta = Pregunta::where('i_codpreg',11)->get();
        return response()
            ->view('encuestas/cuestionario',['indicadores'=>$indicadores]);
    }

    // public function listarpreg($encuesta){
    //     $indicadores = EncuestaIndicador::where('i_codenc',$encuesta)->get()->sortBy('i_codind');
    //     //$pregunta = Pregunta::where('i_codpreg',11)->get();
    //     return dd($indicadores);
    // }

    public function getopenc(){
        $openc = EncuestaOperador::where('i_codopera',1)->get();
        return dd($openc);
    } 
    public function formulario(Request $request){
        $encuesta = $request->encuesta;
        $operador = $request->i_codopera;
        $indicadores = Encuesta::find($encuesta)->indicadores;
        return response()
            ->view('encuestas/cuestionario',['indicadores'=>$indicadores]);
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
