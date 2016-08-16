<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicador;
use App\TipOrganismo;
use App\Operador;
use Auth;

class EncuestasController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
    	$datos = Indicador::get();

    	return response()
            ->view('seleccionarEncuesta', ['datos'=>$datos]);
    }
    public function cobertura(){
    	$datos = TipOrganismo::all();
    	//$oper = Operador::all();
    	//$total = $oper->getcodes()->distinct('i_codopera')->count('i_codopera');
    	return view('encuestas.cobertura',['tiporganismos'=>$datos]);    	

    }    
}
