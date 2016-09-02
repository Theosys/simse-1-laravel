<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ObjetivoEstrategico;
use App\ObjetivoEspecifico;
use Auth;

class ObjetivosEspecificosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $objestrategicos = ObjetivoEstrategico::where('i_estreg','=',1)->where('i_codinst','=',1)->get();                
        $objespecificos = ObjetivoEspecifico::where('i_estreg','=',1)->get();        
        //$obj = ObjetivoEspecifico::with('objespecifico.institucion')->where('i_codinst','=',1)->get();  
        //dd($objespecificos);      
        return view('planseguimientos.objespecificos.create',['objestrategicos'=>$objestrategicos, 'objespecificos'=>$objespecificos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objespecificos = ObjetivoEspecifico::all();        
        return view('planseguimientos.objespecificos.create',['objespecificos'=>$objespecificos]);
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
      $objespecifico = new ObjetivoEspecifico;      
      $objespecifico->v_desobjesp = $request->v_desobjesp;      
      $objespecifico->i_codobjest = $request->i_codobjest;                  
      $objespecifico->i_usureg = $user->id;
      $objespecifico->i_usumod = $user->id;
      $objespecifico->i_estreg = 1;     
      $objespecifico->save();                        
      return redirect()->action('ObjetivosEspecificosController@index');
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
        $objespecifico = ObjetivoEspecifico::find($id);
        return view('planseguimientos.objespecificos.edit',['objestrategicos'=>$objestrategicos, 'objespecifico'=>$objespecifico]);
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
      $objespecifico = ObjetivoEspecifico::find($id);      
      $objespecifico->v_desobjesp = $request->v_desobjesp;                        
      $objespecifico->i_codobjest = $request->i_codobjest;                  
      $objespecifico->i_usureg = $user->id;
      $objespecifico->i_usumod = $user->id;
      $objespecifico->i_estreg = 1;     
      $objespecifico->save();                  
      // return redirect()->back();
      return redirect()->action('ObjetivosEspecificosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objespecifico = ObjetivoEspecifico::find($id);
        $objespecifico->delete();
        return redirect()->action('ObjetivosEspecificosController@index');
    }
}
