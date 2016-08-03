<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicador;

class EncuestasController extends Controller
{
    public function index(){
    	$datos = Indicador::get();
    	return response()
            ->view('seleccionarEncuesta', ['datos'=>$datos]);
    }
}
