<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Operador;
use App\PlanSeguimiento;
use App\TipoOrganismo;
use App\Area;
use Auth;
use Session;
use Response;


class OperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $planes;
    var $param;

    public function __construct()
    {
        $this->setPlanes();
        
    }
    
    public function index(Request $request)
    {        
        $operadores = Operador::where('i_estreg',1)->orderBy('i_codopera', 'desc')->paginate(10);
        if ($request->v_coddep!=0) 
        {
            if ($request->v_codpro==0){
                $operadores = Operador::search($request->des,$request->v_coddep)->where('i_estreg',1)->orderBy('i_codopera', 'desc')->paginate(10);
                dd($request->v_codpro);
            }
            else{
                if ($request->v_coddis==0) {
                    $operadores = Operador::search($request->des,$request->v_coddep)->where('v_codpro',$request->v_codpro)->where('i_estreg',1)->orderBy('i_codopera', 'desc')->paginate(10);
                    dd($request->v_coddis);
                }
                else{
                    $operadores = Operador::search($request->des,$request->v_coddep)->where('v_codpro',$request->v_codpro)->where('v_coddis',$request->v_coddis)->where('i_estreg',1)->orderBy('i_codopera', 'desc')->paginate(10);   
                }
                
            }
        }
        
        return view('operadores.index', ['operadores' => $operadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoorganismos = TipoOrganismo::all()->lists('v_destiporg','i_codtiporg');        
        return view('operadores.create',['tipoorganismos'=>$tipoorganismos,'planes'=>$this->planes,'route'=>['operadores.store'],'method'=>'POST']);   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->build($request,'C');
        $i_codopera =Operador::crud($this->param);
        return redirect()->action('OperadoresController@index');
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
        $tipoorganismos = TipoOrganismo::all()->lists('v_destiporg','i_codtiporg');
        $row_operador = Operador::find($id);
        return view('operadores.edit',['tipoorganismos'=>$tipoorganismos,'row_operador'=>$row_operador,'planes'=>$this->planes,'route'=>['operadores.update',$id],'method'=>'PUT']);      
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
        $this->build($request,'U');
        $i_codopera =Operador::crud($this->param);
        return redirect()->action('OperadoresController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->build($request,'D');
        $i_codopera =Operador::crud($this->param);
        return $i_codopera;
    }

    public function listarpreg(Request $request)
    {
        //crear un request para evitar injection y csrf
        $query = str_replace(array("'",'á','é','í','ó','ú','ñ'),array('"','Á','É','Í','Ó','Ú','Ñ'),strtoupper($request->get('q')));

        //SOUNDS LIKE
        $prg_operadores = Operador::where('v_desrazon', 'LIKE', '%'.$query.'%')->get(['i_codopera','v_desrazon','v_numruc','v_direccion']);
        foreach($prg_operadores as $operador)
        {
            //$response[] = $operador->v_desrazon;
            $response[] = [
                'desrazon' => $operador->v_desrazon,
                'id'=>$operador->i_codopera,
                ];
            /*    
            */
        }
        return Response::json($response);
        

    }

    public function setPlanes()
    {
        if(!isset($this->planes)){
            $this->planes = PlanSeguimiento::all();
        }
    }

    private function build($post,$accion)
    {
      //this is the orden for stores and functions
      
      $this->param = [
            "'".$accion."'",
            "'".(int)$post->get('i_codopera')."'",
            "'".$post->get('v_numruc')."'",
            "'".$post->get('v_desrazon')."'",
            "'".$post->get('v_desoperador')."'",
            "'".$post->get('v_sigla')."'",
            "'".(int)$post->get('i_codtiporg')."'",
            "'".(int)$post->get('i_codnivel')."'",
            "'".$post->get('v_coddis')."'",
            "'".$post->get('v_codpro')."'",
            "'".$post->get('v_coddep')."'",
            "'".$post->get('v_direccion')."'",
            "'".$post->get('v_numtel')."'",
            "'".$post->get('v_numfax')."'",
            "'".$post->get('v_email')."'",
            "'".$post->get('v_web')."'",
            "'".Auth::user()->id."'",
            "'".Auth::user()->id."'"
      ];
      
    }    
}
