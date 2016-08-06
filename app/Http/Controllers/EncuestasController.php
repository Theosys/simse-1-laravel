<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicador;
use App\Encuesta;
use App\TipoOrganismo;
use App\Operador;
use Auth;


class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($codtiporg = 0)
    {
        $encuestas = Encuesta::get()->sortByDesc('created_at')->lists('v_desenc');
        $tipoOrganismos = TipoOrganismo::get()->lists('v_destiporg'); 
        $operadores = Operador::where('i_codtiporg',$codtiporg)->get()->lists('v_desoperador'); 
        $usuario = Auth::user();
        return response()
            ->view('encuestas/index', ['encuestas'=>$encuestas, 'tipoOrganismos'=>$tipoOrganismos, 'operadores'=>$operadores,'usuario'=>$usuario]);
    }

    public function prueba($valor){
        $valor = $valor;
        $operadores = Operador::where('i_codtiporg',$valor)->get();
        return $operadores;
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
        //
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
