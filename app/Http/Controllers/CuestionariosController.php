<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Cuestionario;
use App\PlanSeguimiento;
use Auth;

class CuestionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cuestionarios = Cuestionario::all();
        $cuestionarios = Cuestionario::where('i_codinst','=',1)->get();
        return view('cuestionarios.index', ['cuestionarios' => $cuestionarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes = PlanSeguimiento::all();
        return view('cuestionarios.create', ['planes' => $planes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuestionario = new Cuestionario;
        $user = Auth::user();
        $cuestionario->v_descuest = $request->v_descuest;
        $cuestionario->i_codplan = $request->i_codplan;
        $cuestionario->i_usureg = $user->id;
        $cuestionario->i_usumod = $user->id;
        $cuestionario->i_codinst = 1;
        $cuestionario->i_estreg = 1;
        $cuestionario->save();
        return redirect()->action('CuestionariosController@index');
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
        $cuestionario = Cuestionario::find($id);
        $planes = PlanSeguimiento::all();
        return view('cuestionarios.edit', ['cuestionario' => $cuestionario, 'planes' => $planes]);
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
        $cuestionario = Cuestionario::find($id);
        $cuestionario->v_descuest = $request->v_descuest;
        $cuestionario->i_codplan = $request->i_codplan;
        $cuestionario->i_usumod = Auth::user()->id;
        $cuestionario->save();
        return redirect()->action('CuestionariosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuestionario = Cuestionario::find($id);
        $cuestionario->delete();
        return redirect()->action('CuestionariosController@index');
    }
}
