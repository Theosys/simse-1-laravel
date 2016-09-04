<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Operador;
use App\PlanSeguimiento;
use Auth;
use Session;



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
    
    public function index()
    {
        $operadores = Operador::where('i_estreg',1)->orderBy('i_codopera', 'desc')->get();
        return view('operadores.index', ['operadores' => $operadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operadores.create',['planes'=>$this->planes,'route'=>['operadores.store'],'method'=>'POST']);   
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
        $row_operador = Operador::find($id);
        return view('operadores.edit',['row_operador'=>$row_operador,'planes'=>$this->planes,'route'=>['operadores.update',$id],'method'=>'PUT']);      
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
