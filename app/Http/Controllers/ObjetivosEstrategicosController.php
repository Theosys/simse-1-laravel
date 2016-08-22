<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Institucion;
use App\ObjetivoNacional;
use App\ObjetivoEstrategico;
use Auth;

class ObjetivosEstrategicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::where('i_estreg','=',1)->get();        
        $objnacionales = ObjetivoNacional::where('i_estreg','=',1)->get();                
        $objestrategicos = ObjetivoEstrategico::where('i_estreg','=',1)->get();        
        //dd($objestrategicos);
        return view('planseguimientos.objestrategicos.create',['instituciones'=>$instituciones, 'objnacionales'=>$objnacionales, 'objestrategicos'=>$objestrategicos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objestrategicos = ObjetivoEstrategico::all();        
        return view('planseguimientos.objestrategicos.create',['objestrategicos'=>$objestrategicos]);
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
      $objestrategico = new ObjetivoEstrategico;      
      $objestrategico->v_desobjest = $request->v_desobjest;
      $objestrategico->i_codinst = $request->i_codinst;                  
      $objestrategico->i_codobjnac = $request->i_codobjnac;                  
      $objestrategico->i_usureg = $user->id;
      $objestrategico->i_usumod = $user->id;
      $objestrategico->i_estreg = 1;     
      $objestrategico->save();                        
      return redirect()->action('ObjetivosEstrategicosController@index');
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
        $instituciones = Institucion::all();
        $objnacionales = ObjetivoNacional::all();
        $objestrategico = ObjetivoEstrategico::find($id);
        return view('planseguimientos.objestrategicos.edit',['instituciones'=>$instituciones, 'objnacionales'=>$objnacionales, 'objestrategico'=>$objestrategico]);
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
      $objestrategico = ObjetivoEstrategico::find($id);      
      $objestrategico->v_desobjest = $request->v_desobjest;                  
      $objestrategico->i_codinst = $request->i_codinst;
      $objestrategico->i_codobjnac = $request->i_codobjnac;                  
      $objestrategico->i_usureg = $user->id;
      $objestrategico->i_usumod = $user->id;
      $objestrategico->i_estreg = 1;     
      $objestrategico->save();                  
      // return redirect()->back();
      return redirect()->action('ObjetivosEstrategicosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objestrategico = ObjetivoEstrategico::find($id);
        $objestrategico->delete();
        return redirect()->action('ObjetivosEstrategicosController@index');
    }
}
