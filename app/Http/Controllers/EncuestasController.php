<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use App\Respuesta;
use App\Subrespuesta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Indicador;

use App\TipOrganismo;

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
        /*$cuestionario = new Cuestionario;
        $cuestionario->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
        $cuestionario->d_fecini = Carbon::now();
        $cuestionario->i_usureg = Auth::user()->id;
        $cuestionario->i_estreg = 1;
        $cuestionario->i_codenc = $request->encuesta;
        $cuestionario->save();*/

        foreach ($request->preg as $numpreg => $pregunta){

                if (isset($pregunta['alt'])){
                    foreach ($pregunta['alt'] as $resp){
                        $respuesta = new Respuesta;
                        $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                        $respuesta->i_codenc = $request->encuesta;
                        $respuesta->i_codpreg = $numpreg;
                        $respuesta->i_codalt = $resp;
                        $respuesta->v_desreptex = $resp;
                        $respuesta->i_index = 1;
                        $respuesta->i_usureg = Auth::user()->id;
                        $respuesta->i_usumod = Auth::user()->id;
                        $respuesta->i_estreg = 1;
                        $respuesta->save();
                    }
                }
                if (isset($pregunta['subpreg'])){
                    foreach ($pregunta['subpreg'] as $numsubpreg => $alt){
                        foreach ($alt as $resp) {
                            $subrespuesta = new Subrespuesta;
                            $subrespuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                            $subrespuesta->i_codenc = $request->encuesta;
                            $subrespuesta->i_codpreg = $numpreg;
                            $subrespuesta->i_codsubpreg = $numsubpreg;
                            $subrespuesta->i_codsubalt = $resp;
                            $subrespuesta->v_desreptex = $resp;
                            $subrespuesta->i_index = 1;
                            $subrespuesta->i_usureg = Auth::user()->id;
                            $subrespuesta->i_usumod = Auth::user()->id;
                            $subrespuesta->i_estreg = 1;
                            $subrespuesta->save();
                        }

                    }
                }

        }
        return redirect()->action('EncuestasController@index');
        //return dd($request);
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
    public function cobertura(){
    	$datos = TipOrganismo::all();
    	//$oper = Operador::all();
    	//$total = $oper->getcodes()->distinct('i_codopera')->count('i_codopera');
    	return view('encuestas.cobertura',['tiporganismos'=>$datos]);    	

    }    
}
