<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ObjetivoEstrategico;
use App\Accion;
use App\Responsable;
use App\Actor;
use Auth;

class AccionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objestrategicos = ObjetivoEstrategico::where('i_estreg','=',1)->where('i_codinst','=',1)->get();                
        $acciones = Accion::where('i_estreg','=',1)->get();
        $responsables = Responsable::where('i_estreg','=',1)->get();
        $actores = Actor::where('i_estreg','=',1)->get();
        return view('planseguimientos.acciones.create',['objestrategicos'=>$objestrategicos, 'acciones'=>$acciones, 'responsables'=>$responsables, 'actores'=>$actores]);
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
      $user = Auth::user();
      $accion = new Accion;      
      $accion->v_desaccion = $request->v_desaccion;      
      $accion->v_descripcion = $request->v_descripcion;      
      $accion->i_codobjesp = $request->i_codobjesp;                  
      $accion->i_codplazo = $request->i_codplazo;                  
      $accion->i_codtipo = $request->i_codtipo;                  
      $accion->i_usureg = $user->id;
      $accion->i_usumod = $user->id;
      $accion->i_estreg = 1;
      $accion->save();                        
      return redirect()->action('AccionesController@index');
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
        $objestrategicos = ObjetivoEstrategico::where('i_estreg','=',1)->where('i_codinst','=',1)->get();                
        $accion = Accion::find($id);
        $responsables = Responsable::where('i_estreg','=',1)->get();
        $actores = Actor::where('i_estreg','=',1)->get();
        return view('planseguimientos.acciones.edit',['objestrategicos'=>$objestrategicos, 'accion'=>$accion, 'responsables'=>$responsables, 'actores'=>$actores]);
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
      $user = Auth::user();
      $accion = Accion::find($id);      
      $accion->v_desaccion = $request->v_desaccion;      
      $accion->v_descripcion = $request->v_descripcion;      
      $accion->i_codobjesp = $request->i_codobjesp;                  
      $accion->i_codplazo = $request->i_codplazo;                  
      $accion->i_codtipo = $request->i_codtipo;                  
      $accion->i_usureg = $user->id;
      $accion->i_usumod = $user->id;
      $accion->i_estreg = 1;
      $accion->save();                        
      return redirect()->action('AccionesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accion = Accion::find($id);
        $accion->delete();
        return redirect()->action('AccionesController@index');
    }
}
