<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Operador;
use App\PlanSeguimiento;
use Auth;

class OperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operadores = Operador::all();
        return view('operadores.index', ['operadores' => $operadores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = PlanSeguimiento::all();
        return view('operadores.create', ['planes' => $planes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operador = new Operador;
        $user = Auth::user();
        $operador->v_descuest = $request->v_descuest;
        $operador->i_codplan = $request->i_codplan;
        $operador->i_usureg = $user->id;
        $operador->i_usumod = $user->id;
        $operador->i_codinst = 1;
        $operador->i_estreg = 1;
        $operador->save();
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
        $operador = Operador::find($id);
        $planes = PlanSeguimiento::all();
        return view('operadors.edit', ['operador' => $operador, 'planes' => $planes]);
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
        $operador = Operador::find($id);
        $operador->v_descuest = $request->v_descuest;
        $operador->i_codplan = $request->i_codplan;
        $operador->i_usumod = Auth::user()->id;
        $operador->save();
        return redirect()->action('OperadoresController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operador = Operador::find($id);
        $operador->delete();
        return redirect()->action('OperadoresController@index');
    }
}
