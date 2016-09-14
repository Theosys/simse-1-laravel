<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

use App\Indicador;
use App\EstructuraCuestionario;
use App\CuestionarioVersion;
use App\Pregunta;
use Auth;

class EstrucCuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
        $indicadores = Indicador::all()->lists('v_tituloind','i_codind');        
        $cod_version = 5;
        $version = CuestionarioVersion::find($cod_version);        
        $preguntas = $version->preguntas;       
        
        $preg_array = array();
        foreach ($preguntas as $preg) {
            //generando una lista de id de las preguntas de una version
            array_push($preg_array, $preg->i_codpreg);
            //Buscando el indicador de una determinada pregunta que pertenece a una versión
            $estruccuest = EstructuraCuestionario::where('i_codpreg',$preg->i_codpreg)->where('i_codver',$cod_version)->get()->first();
            $indicador = Indicador::find($estruccuest->i_codind);
            $preg->ind=$indicador->v_tituloind;
            $preg->i_clave=$estruccuest->i_clave;
        }        
        $nopreguntas = Pregunta::whereNotIn('i_codpreg',$preg_array)->get()->lists('v_despreg','i_codpreg');        
        //dd($preguntas);   
        return view('cuestionarios.estructura.create',['cod_version'=>$cod_version, 'preguntas' => $preguntas, 'nopreguntas' => $nopreguntas, 'indicadores' => $indicadores]);     
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
        //dd($request);
        $user = Auth::user();
        $estruccuest = new EstructuraCuestionario;
        $estruccuest->i_codcuest = $request->i_codcuest;
        $estruccuest->i_codver = $request->i_codver;
        $estruccuest->i_codind = $request->i_codind;
        $estruccuest->i_codpreg = $request->i_codpreg;
        $estruccuest->i_usureg = $user->id;
        $estruccuest->i_usumod = $user->id;        
        $estruccuest->i_estreg = 1;
        $estruccuest->save();
        return redirect()->action('EstrucCuestionariosController@index');
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
    public function eliminar(Request $request)
    {   
        //dd($request->i_codpreg);    
        $estruccuest = EstructuraCuestionario::where('i_codpreg',$request->i_codpreg)->where('i_codver',$request->i_codver);
        //$result  =  DB::select("select deleteEstructCuest($request->i_codpreg,$request->i_codver) as Id");
        //$result  =  DB::select("DELETE FROM cntbd_estructcuest WHERE i_codver = $request->i_codver AND i_codpreg = $request->i_codpreg");
        //dd($result);        
        $estruccuest->delete();
        return redirect()->action('EstrucCuestionariosController@index');
    }
}
