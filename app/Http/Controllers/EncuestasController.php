<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use App\OperadorEncuesta;
use App\Respuesta;
use App\Subrespuesta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Indicador;

use App\Encuesta;
use App\TipoOrganismo;
use App\Operador;
use App\Pregunta;
use App\CuestionarioVersion;
use App\Frecuencia;
use Auth;

class EncuestasController extends Controller
{

    public function index()
    {
        $encuestas = Encuesta::get()->sortByDesc('created_at')->lists('v_desenc','i_codenc');
        $tipoOrganismos = TipoOrganismo::get()->lists('v_destiporg','i_codtiporg');
        $operador = Auth::user()->persona->operadores->first();
        $encuestasOperador = $operador->encuestas->sortByDesc('i_codenc');
            
        return response()
            ->view('encuestas/index', [
                'encuestas'=>$encuestas,
                'tipoOrganismos'=>$tipoOrganismos,
                'encuestasOperador'=>$encuestasOperador
            ]);

        //return dd($encuestasOperador);
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
        //$cuestionario = OperadorEncuesta::buscar(1,1)->respuestas();
        $pregunta = Pregunta::find(11);
        return dd($pregunta->subpreguntas);
    }

    public function cuestionario(Request $request){
        $operador = $request->operador;
        $encuesta = $request->encuesta;
        $indicadores = Encuesta::find($encuesta)->indicadores->unique('i_codind')->sortBy('i_numind');

        $preguntas = Encuesta::find($encuesta)->preguntas;
        //dd($preguntas);

        //$respuestas = OperadorEncuesta::buscar($operador, $encuesta)->respuestas();
        //$subrespuestas = OperadorEncuesta::buscar($operador, $encuesta)->subrespuestas();
        $enc = Encuesta::find($encuesta);
        return response()
            ->view('encuestas/cuestionario',[
                'indicadores'=>$indicadores,
                'encuesta'=>$enc,
                'preguntas'=>$preguntas,
                'operador'=>$operador]);
    }

    public function create()
    {
        $cuestionarios = Cuestionario::all()->lists('v_descuest','i_codcuest');
        $versiones = CuestionarioVersion::all()->lists('v_desver','i_codver');
        $frecuencias = Frecuencia::all()->lists('v_desfre','i_codfre');
        $periodos = array('I'=>'I','II'=>'II','III'=>'III','IV'=>'IV');
        $anios = array('2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017');        
        return view('encuestas.create',['cuestionarios'=>$cuestionarios, 'versiones'=>$versiones, 'frecuencias'=>$frecuencias, 'periodos'=>$periodos, 'anios'=>$anios]);
    }
    public function guardar(Request $request)
    {
       dd($request);
    }


    public function store(Request $request)
    {   //dd($request);
        $cuestionario = new OperadorEncuesta;
        $cuestionario->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
        $cuestionario->d_fecini = Carbon::now();
        $cuestionario->i_usureg = Auth::user()->id;
        $cuestionario->i_estreg = 1;
        $cuestionario->i_codenc = $request->encuesta;
        $cuestionario->save();

        foreach ($request->preg as $numpreg => $pregunta){
            if (isset($pregunta['alt'])){
                foreach ($pregunta['alt'] as $resp){
                    $respuesta = new Respuesta;
                    $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                    $respuesta->i_codenc = $request->encuesta;
                    $respuesta->i_codpreg = $numpreg;
                    $respuesta->i_codalt = $resp;
                    $respuesta->b_estado = 1;
                    $respuesta->i_index = 1;
                    $respuesta->i_usureg = Auth::user()->id;
                    $respuesta->i_usumod = Auth::user()->id;
                    $respuesta->i_estreg = 1;
                    $respuesta->save();
                }
            }
            if (isset($pregunta['ab'])){
                foreach ($pregunta['ab'] as $cod => $resp){
                    $respuesta = new Respuesta;
                    $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                    $respuesta->i_codenc = $request->encuesta;
                    $respuesta->i_codpreg = $numpreg;
                    $respuesta->i_codalt = $cod;
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
                        $subrespuesta->i_index = 1;
                        $subrespuesta->i_usureg = Auth::user()->id;
                        $subrespuesta->i_usumod = Auth::user()->id;
                        $subrespuesta->i_estreg = 1;
                        $subrespuesta->save();
                    }
                }
            }
            if (isset($pregunta['subpregab'])){
                foreach ($pregunta['subpregab'] as $numsubpreg => $alt){
                    foreach ($alt as $cod => $resp) {
                        $subrespuesta = new Subrespuesta;
                        $subrespuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                        $subrespuesta->i_codenc = $request->encuesta;
                        $subrespuesta->i_codpreg = $numpreg;
                        $subrespuesta->i_codsubpreg = $numsubpreg;
                        $subrespuesta->i_codsubalt = $cod;
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
    }
    
    public function listar() 
    {
        $encuestas = Encuesta::get()->sortByDesc('created_at');        
        //dd($encuestas);
        return view('encuestas.listar',['encuestas'=>$encuestas]);
    }

    public function show($id)
    {
        
    }

    public function edit($operador, $encuesta)
    {
        $indicadores = Encuesta::find($encuesta)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($encuesta)->preguntas;
        $respuestas = OperadorEncuesta::buscar($operador, $encuesta)->respuestas();
        $subrespuestas = OperadorEncuesta::buscar($operador, $encuesta)->subrespuestas();
        $enc = Encuesta::find($encuesta);
        return response()
            ->view('encuestas/edit',[
                'indicadores'=>$indicadores,
                'encuesta'=>$enc,
                'preguntas'=>$preguntas,
                'operador'=>$operador,
                'respuestas'=>$respuestas,
                'subrespuestas'=>$subrespuestas]);
    }    

    public function update(Request $request){
        //$operador = Auth::user()->persona->operadores->first()->i_codopera;
        $operador = $request->operador;
        $encuesta = $request->encuesta;

        $respuestas = Respuesta::where('i_codopera', $operador)->where('i_codenc', $encuesta)->get();
        $subrespuestas = Subrespuesta::where('i_codopera', $operador)->where('i_codenc', $encuesta)->get();

        foreach ($respuestas as $respuesta){
            $respuesta->delete();
        }
        foreach ($subrespuestas as $subrespuesta){
            $subrespuesta->delete();
        }

        foreach ($request->preg as $numpreg => $pregunta){
            if (isset($pregunta['alt'])){
                foreach ($pregunta['alt'] as $resp){
                    $respuesta = new Respuesta;
                    $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                    $respuesta->i_codenc = $request->encuesta;
                    $respuesta->i_codpreg = $numpreg;
                    $respuesta->i_codalt = $resp;
                    $respuesta->b_estado = 1;
                    $respuesta->i_index = 1;
                    $respuesta->i_usureg = Auth::user()->id;
                    $respuesta->i_usumod = Auth::user()->id;
                    $respuesta->i_estreg = 1;
                    $respuesta->save();
                }
            }
            if (isset($pregunta['ab'])){
                foreach ($pregunta['ab'] as $cod => $resp){
                    $respuesta = new Respuesta;
                    $respuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                    $respuesta->i_codenc = $request->encuesta;
                    $respuesta->i_codpreg = $numpreg;
                    $respuesta->i_codalt = $cod;
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
                        $subrespuesta->i_index = 1;
                        $subrespuesta->i_usureg = Auth::user()->id;
                        $subrespuesta->i_usumod = Auth::user()->id;
                        $subrespuesta->i_estreg = 1;
                        $subrespuesta->save();
                    }
                }
            }
            if (isset($pregunta['subpregab'])){
                foreach ($pregunta['subpregab'] as $numsubpreg => $alt){
                    foreach ($alt as $cod => $resp) {
                        $subrespuesta = new Subrespuesta;
                        $subrespuesta->i_codopera = Auth::user()->persona->operadores->first()->i_codopera;
                        $subrespuesta->i_codenc = $request->encuesta;
                        $subrespuesta->i_codpreg = $numpreg;
                        $subrespuesta->i_codsubpreg = $numsubpreg;
                        $subrespuesta->i_codsubalt = $cod;
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
    }

    public function destroy($id)
    {

    }

    public function editar ($id){
        $encuesta = Encuesta::find($id);
        $cuestionarios = Cuestionario::all()->lists('v_descuest','i_codcuest');
        $versiones = CuestionarioVersion::all()->lists('v_desver','i_codver');
        $frecuencias = Frecuencia::all()->lists('v_desfre','i_codfre');
        $periodos = array('I'=>'I','II'=>'II','III'=>'III','IV'=>'IV');
        $anios = array('2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017');
        return view('encuestas.editar',['encuesta'=>$encuesta, 'cuestionarios'=>$cuestionarios, 'versiones'=>$versiones, 'frecuencias'=>$frecuencias, 'periodos'=>$periodos, 'anios'=>$anios]);        
    }
    public function indpreg($id){
        $indicadores = Encuesta::find($id)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($id)->preguntas;
        $encuesta = Encuesta::find($id);
        return view ('encuestas.indpreg',['encuesta'=>$encuesta,'indicadores'=>$indicadores,'preguntas'=>$preguntas]);
    }
    public function cobertura()
    {    	
    	$datos = TipoOrganismo::all();
    	//$oper = Operador::all();
    	//$total = $oper->getcodes()->distinct('i_codopera')->count('i_codopera');
    	return view('encuestas.cobertura',['tiporganismos'=>$datos]);    	

    }    
}
