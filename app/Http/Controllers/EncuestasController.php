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
use Storage;


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

    public function edit($i_codopera, $i_codenc)
    {
        $indicadores = Encuesta::find($i_codenc)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($i_codenc)->preguntas;
        $operador_encuesta =OperadorEncuesta::buscar($i_codopera, $i_codenc);
        $respuestas = $operador_encuesta->respuestas();
        $enc = Encuesta::find($i_codenc);
        return response()
            ->view('encuestas/editar',[
                'indicadores'=>$indicadores,
                'encuesta'=>$enc,
                'preguntas'=>$preguntas,
                'operador'=>$i_codopera,
                'respuestas'=>$respuestas,
                'operador_encuesta'=>$operador_encuesta,
                
                
                ]);
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

        $i_codopera = Auth::user()->persona->operadores->first()->i_codopera;

        // echo '<pre>';
        // print_r($parameters);
        // print_r($post);
        // echo '</pre>';
        $respuesta = new Respuesta;
        
        $respuesta->where('i_codenc','=',$request->encuesta)
        ->where('i_codopera','=',$i_codopera)
        ->where('i_codopera','=',$i_codopera)
        ->update(['i_estreg'=>'0']);
        foreach ($parameters as $key => $value) {
            if($parameters[$key]['parent'] == 0){
                $i_codpreg = $key;
                if(is_array($parameters[$key]['opcion'])){
                    //opcion multiple
                    foreach($parameters[$key]['opcion'] as $opt){
                        $i_codalt = $post['ALTERNATIVA-'.$parameters[$key]['parent'].'-'.$key.'-'.$opt];
                        $v_desreptex = $opt;

                        // :::::::::::::::
                        //Respuesta::insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index);
                        $respuesta = new Respuesta;
                        $respuesta->i_codopera = $i_codopera;
                        $respuesta->i_codenc = $request->encuesta;
                        $respuesta->i_codpreg = $i_codpreg;
                        $respuesta->i_codalt = $i_codalt;
                        $respuesta->v_desreptex = $v_desreptex;
                        $respuesta->b_estado = 1;
                        $respuesta->i_index = 1;
                        $respuesta->i_usureg = Auth::user()->id;
                        $respuesta->i_usumod = Auth::user()->id;
                        $respuesta->i_estreg = 1;
                        $respuesta->save();
                    
                        if(array_key_exists('lista', $parameters[$key])){
                            foreach($parameters[$key]['lista'] as $key2 =>$value2){
                                if(array_key_exists('ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2, $post)){
                                    $i_codalt = $post['ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2];
                                    $v_desreptex = $value2;
                                    $i_codpreg = $key2;
                                    

                                    $respuesta = new Respuesta;
                                    $respuesta->i_codopera = $i_codopera;
                                    $respuesta->i_codenc = $request->encuesta;
                                    $respuesta->i_codpreg = $i_codpreg;
                                    $respuesta->i_codalt = $i_codalt;
                                    $respuesta->v_desreptex = $v_desreptex;
                                    $respuesta->b_estado = 1;
                                    $respuesta->i_index = 1;
                                    $respuesta->i_usureg = Auth::user()->id;
                                    $respuesta->i_usumod = Auth::user()->id;
                                    $respuesta->i_estreg = 1;
                                    $respuesta->save();
                                
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
                                                        $respuesta = new Respuesta;
                                                        $respuesta->i_codopera = $i_codopera;
                                                        $respuesta->i_codenc = $request->encuesta;
                                                        $respuesta->i_codpreg = $i_codpreg;
                                                        $respuesta->i_codalt = $i_codalt;
                                                        $respuesta->v_desreptex = $v_desreptex;
                                                        $respuesta->b_estado = 1;
                                                        $respuesta->i_index = 1;
                                                        $respuesta->i_usureg = Auth::user()->id;
                                                        $respuesta->i_usumod = Auth::user()->id;
                                                        $respuesta->i_estreg = 1;
                                                        $respuesta->save();
                                                    }
                                                }
                                                else{
                                                    //artificio para preguntas abiertas ( a su vez no son condicionales para otras subpreguntas)
                                                    if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion,$post)){
                                                        $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion];
                                                        $v_desreptex = $value3;
                                                        $i_codpreg = $key3;
                                                        
                                                        $respuesta = new Respuesta;
                                                        $respuesta->i_codopera = $i_codopera;
                                                        $respuesta->i_codenc = $request->encuesta;
                                                        $respuesta->i_codpreg = $i_codpreg;
                                                        $respuesta->i_codalt = $i_codalt;
                                                        $respuesta->v_desreptex = $v_desreptex;
                                                        $respuesta->b_estado = 1;
                                                        $respuesta->i_index = 1;
                                                        $respuesta->i_usureg = Auth::user()->id;
                                                        $respuesta->i_usumod = Auth::user()->id;
                                                        $respuesta->i_estreg = 1;
                                                        $respuesta->save();
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
                    $respuesta = new Respuesta;
                    $respuesta->i_codopera = $i_codopera;
                    $respuesta->i_codenc = $request->encuesta;
                    $respuesta->i_codpreg = $i_codpreg;
                    $respuesta->i_codalt = $i_codalt;
                    $respuesta->v_desreptex = $v_desreptex;
                    $respuesta->b_estado = 1;
                    $respuesta->i_index = 1;
                    $respuesta->i_usureg = Auth::user()->id;
                    $respuesta->i_usumod = Auth::user()->id;
                    $respuesta->i_estreg = 1;
                    $respuesta->save();

                    if(array_key_exists('lista', $parameters[$key])){
                        foreach($parameters[$key]['lista'] as $key2 =>$value2){
                            if(array_key_exists('ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2, $post)){
                                $i_codalt = $post['ALTERNATIVA-'.$key.'-'.$key2.'-'.$value2];
                                $v_desreptex = $value2;
                                $i_codpreg = $key2;
                                
                                $respuesta = new Respuesta;
                                $respuesta->i_codopera = $i_codopera;
                                $respuesta->i_codenc = $request->encuesta;
                                $respuesta->i_codpreg = $i_codpreg;
                                $respuesta->i_codalt = $i_codalt;
                                $respuesta->v_desreptex = $v_desreptex;
                                $respuesta->b_estado = 1;
                                $respuesta->i_index = 1;
                                $respuesta->i_usureg = Auth::user()->id;
                                $respuesta->i_usumod = Auth::user()->id;
                                $respuesta->i_estreg = 1;
                                $respuesta->save();
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

                                            //preguntas cerradas
                                            if($row[0]->i_codtipo==2 || $row[0]->i_codtipo ==3 || $row[0]->i_codtipo ==4){
                                                if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3,$post)){
                                                    $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$value3];
                                                    $v_desreptex = $value3;
                                                    $i_codpreg = $key3;
                                                    $respuesta = new Respuesta;
                                                    $respuesta->i_codopera = $i_codopera;
                                                    $respuesta->i_codenc = $request->encuesta;
                                                    $respuesta->i_codpreg = $i_codpreg;
                                                    $respuesta->i_codalt = $i_codalt;
                                                    $respuesta->v_desreptex = $v_desreptex;
                                                    $respuesta->b_estado = 1;
                                                    $respuesta->i_index = 1;
                                                    $respuesta->i_usureg = Auth::user()->id;
                                                    $respuesta->i_usumod = Auth::user()->id;
                                                    $respuesta->i_estreg = 1;
                                                    $respuesta->save();
                                                }
                                            }
                                            //artificio para preguntas abiertas ( a su vez no son condicionales para otras subpreguntas)
                                            else{
                                                if(array_key_exists('ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion,$post)){
                                                    if($row[0]->i_codtipo==5){
                                                        $file = $request->file('ENCUESTA-'.$key2.'-'.$key3);
                                                        $value3 = 'default';
                                                        if(!empty($file)){
                                                            $PersonalId = uniqid();
                                                            try{
                                                                $value3 = uniqid().'_'.$file->getClientOriginalName();
                                                                Storage::disk('archivos_encuesta')->put($value3, file_get_contents($file));
                                                                
                                                                /*if(copy(storage_path('app/archivos_encuesta/'.$file->getClientOriginalName()),'/'.public_path('assets/personal').'/'.$PersonalId.'.jpg')){
                                                                    $value3 = $PersonalId.'.jpg';
                                                                }*/


                                                                //Storage::disk('personal-fotos')->move($file->getClientOriginalName(),base_path('personal').'/'.$PersonalId.'.jpg');
                                                            }catch(Exception $e){
                                                                $value3 = 'error';
                                                            }
                                                        }
                                                    }
                                                    
                                                    $i_codalt = $post['ALTERNATIVA-'.$key2.'-'.$key3.'-'.$opcion];
                                                    $v_desreptex = $value3;
                                                    $i_codpreg = $key3;
                                                    $respuesta = new Respuesta;
                                                    $respuesta->i_codopera = $i_codopera;
                                                    $respuesta->i_codenc = $request->encuesta;
                                                    $respuesta->i_codpreg = $i_codpreg;
                                                    $respuesta->i_codalt = $i_codalt;
                                                    $respuesta->v_desreptex = $v_desreptex;
                                                    $respuesta->b_estado = 1;
                                                    $respuesta->i_index = 1;
                                                    $respuesta->i_usureg = Auth::user()->id;
                                                    $respuesta->i_usumod = Auth::user()->id;
                                                    $respuesta->i_estreg = 1;
                                                    $respuesta->save();
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
        
        return redirect("encuestas/".$i_codopera."/".$request->encuesta);
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
