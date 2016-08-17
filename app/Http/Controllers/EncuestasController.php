<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use App\Respuesta;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicador;
use App\Encuesta;
use App\TipoOrganismo;
use App\Operador;
use App\Pregunta;
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
        $encuestasOperador = Operador::find(1)->encuestas->sortByDesc('i_codenc');
        return response()
            ->view('encuestas/index', ['encuestas'=>$encuestas, 'tipoOrganismos'=>$tipoOrganismos, 'encuestasOperador'=>$encuestasOperador]);
    }

    public function operador(Request $request){
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

    public function respuestas(){
        //$respuestas = Encuesta::find(1)->respuestas();
        //$cuestionario = Cuestionario::buscar(1,1)->respuestas();
        $pregunta = Pregunta::find(11);
        return dd($pregunta->subpreguntas);
    }

    public function getopenc(){
        $openc = EncuestaOperador::where('i_codopera',1)->get();
        return dd($openc);
    } 
    public function cuestionario(Request $request){
        $encuesta = $request->encuesta;
        $operador = $request->i_codopera;
        $indicadores = Encuesta::find($encuesta)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($encuesta)->preguntas;
        $enc = Encuesta::find($encuesta);
        return response()
            ->view('encuestas/cuestionario',['indicadores'=>$indicadores, 'encuesta'=>$enc, 'preguntas'=>$preguntas, 'operador'=>$operador]);
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
        $encuesta = $request->encuesta;
        //$preguntas = Encuesta::find($encuesta)->preguntas;
        foreach ($request->preg as $key => $pregunta){
                $respuesta = new Respuesta;
                $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                //$respuesta->i_codopera = $request->operador;
                $respuesta->i_codenc = $request->encuesta;
                $respuesta->i_codpreg = $key;
                $respuesta->i_codalt = $pregunta;
                $respuesta->v_desreptex = 'no mola nada';
                $respuesta->i_index = 4;
                $respuesta->i_usureg = 5;
                $respuesta->i_usumod = 12;
                $respuesta->i_estreg = 10;
                $respuesta->save();
        }
        return redirect()->action('EncuestasController@index');
//        return dd($request);
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
