<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use App\OperadorEncuesta;
use App\Respuesta;
use App\Subrespuesta;
use App\Alternativa;
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
class EncuestasABCController extends Controller
{
	public function index()
	{
		/*código copiado de EncuestasController
		begin */
		$encuestas = Encuesta::get()->sortByDesc('created_at')->lists('v_desenc','i_codenc');
        $tipoOrganismos = TipoOrganismo::get()->lists('v_destiporg','i_codtiporg');
        $operador = Auth::user()->persona->operadores->first();
        $encuestasOperador = $operador->encuestas->sortByDesc('i_codenc');
            
        return response()
            ->view('encuestas/indexABC', [
                'encuestas'=>$encuestas,
                'tipoOrganismos'=>$tipoOrganismos,
                'encuestasOperador'=>$encuestasOperador
            ]);
        /*código copiado de EncuestasController
		end */
	}

	public function edit($i_codopera, $i_codenc)
	{
		/*código copiado de EncuestasController
		begin */
		$indicadores = Encuesta::find($i_codenc)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($i_codenc)->preguntas;
        $respuestas = OperadorEncuesta::buscar($i_codopera, $i_codenc)->respuestas();
        $subrespuestas = OperadorEncuesta::buscar($i_codopera, $i_codenc)->subrespuestas();
        $enc = Encuesta::find($i_codenc);
        return response()
            ->view('encuestas/editarABC',[
                'indicadores'=>$indicadores,
                'encuesta'=>$enc,
                'preguntas'=>$preguntas,
                'operador'=>$i_codopera,
                'respuestas'=>$respuestas,
                'subrespuestas'=>$subrespuestas]);
        /*código copiado de EncuestasController
		end */

	}

    public function update(Request $request){
        //$operador = Auth::user()->persona->operadores->first()->i_codopera;
        $post = $request->all();
        $parameters = [];
        foreach($post as $key =>$value){
            $argv = explode('-',$key);
            if($argv['0']=='ENCUESTA'){
                if($argv['1']=='0'){
                    $parameters[$argv['2']]['parent']=$argv['1'];
                    $parameters[$argv['2']]['opcion']=$value;
                }else{
                    $parameters[$argv['1']]['lista'][$argv['2']] = $value;
                    if(!array_key_exists('parent', $parameters[$argv['1']])){
                        $parameters[$argv['1']]['parent']=$argv['1'];
                    }
                }
            }
        }
        $num_parameters = count($parameters);


        $i_codenc =77;
        $i_index = 0;
        echo '<pre>';
        print_r($parameters);
        print_r($post);
        echo '</pre>';

        foreach ($parameters as $key => $value) {
            if($parameters[$key]['parent'] == 0){
                $i_codpreg = $key;
                if(is_array($parameters[$key]['opcion'])){
                    //opcion multiple
                    foreach($parameters[$key]['opcion'] as $opt){
                        $i_codalt = $post['ALTERNATIVA-'.$parameters[$key]['parent'].'-'.$key.'-'.$opt];
                        $v_desreptex = $opt;

                        // :::::::::::::::
                        Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                        if(array_key_exists('lista', $parameters[$key])){
                            foreach($parameters[$key]['lista'] as $key2 =>$value2){
                                if(array_key_exists('ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2, $post)){
                                    $i_codalt = $post['ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2];
                                    $v_desreptex = $value2;
                                    $i_codpreg = $key2;
                                    Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                    //buscar dependencias
                                    $opcion = (int)$parameters[$key]['lista'][$key2];
                                    if($opcion!=0){  

                                        foreach($parameters[$key2]['lista'] as $key3 =>$value3){                            
                                            $coincidencias =Alternativa::where('i_codpreg','=',(int)$key3)
                                            ->where('i_parent','=',(int)$key2)
                                            ->where('i_opcion','=',(int)$opcion)
                                            ->count();
                                            
                                            if($coincidencias>0){
                                                $row =Pregunta::where('i_codpreg','=',(int)$key3)
                                                ->where('i_parent','=',(int)$key2)
                                                ->where('i_opcion','=',(int)$opcion)
                                                ->get();

                                                
                                                if($row[0]->i_codtipo==2 || $row[0]->i_codtipo ==3 || $row[0]->i_codtipo ==4){
                                                    //artificio para preguntas cerradas ( a su vez pueden ser condicionales para otras subpreguntas)
                                                    if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3,$post)){
                                                        $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3];
                                                        $v_desreptex = $value3;
                                                        $i_codpreg = $key3;
                                                        Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                                    }
                                                }
                                                else{
                                                    //artificio para preguntas abiertas ( a su vez no son condicionales para otras subpreguntas)
                                                    if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion,$post)){
                                                        $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion];
                                                        $v_desreptex = $value3;
                                                        $i_codpreg = $key3;
                                                        Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                                    }
                                                }
                                                
                                                
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        // :::::::::::::::



                    }
                }else{
                    // echo 'opcion unica';
                    
                    $i_codalt = $post['ALTERNATIVA-'.$parameters[$key]['parent'].'-'.$key.'-'.$parameters[$key]['opcion']];
                    $v_desreptex = $parameters[$key]['opcion'];


                    // :::::::::::::::
                    Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                    if(array_key_exists('lista', $parameters[$key])){
                        foreach($parameters[$key]['lista'] as $key2 =>$value2){
                            if(array_key_exists('ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2, $post)){
                                $i_codalt = $post['ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2];
                                $v_desreptex = $value2;
                                $i_codpreg = $key2;
                                Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                //buscar dependencias
                                $opcion = (int)$parameters[$key]['lista'][$key2];
                                if($opcion!=0){  

                                    foreach($parameters[$key2]['lista'] as $key3 =>$value3){                            
                                        $coincidencias =Alternativa::where('i_codpreg','=',(int)$key3)
                                        ->where('i_parent','=',(int)$key2)
                                        ->where('i_opcion','=',(int)$opcion)
                                        ->count();
                                        
                                        if($coincidencias>0){
                                            $row =Pregunta::where('i_codpreg','=',(int)$key3)
                                            ->where('i_parent','=',(int)$key2)
                                            ->where('i_opcion','=',(int)$opcion)
                                            ->get();

                                            
                                            if($row[0]->i_codtipo==2 || $row[0]->i_codtipo ==3 || $row[0]->i_codtipo ==4){
                                                if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3,$post)){
                                                    $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3];
                                                    $v_desreptex = $value3;
                                                    $i_codpreg = $key3;
                                                    Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                                }
                                            }
                                            else{
                                                //artificio para preguntas abiertas ( a su vez no son condicionales para otras subpreguntas)
                                                if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion,$post)){
                                                    $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion];
                                                    $v_desreptex = $value3;
                                                    $i_codpreg = $key3;
                                                    Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                                                }
                                            }
                                            
                                            
                                        }
                                    }
                                }
                            }
                        }
                    }
                    // :::::::::::::::


                }
            }
        }
        dd($parameters);

    }
}
