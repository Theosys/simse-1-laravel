<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ObjetivoNacional;
use Auth;

class ObjetivosNacionalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objnacionales = ObjetivoNacional::all();        
        return view('planseguimientos.objnacionales.create',['objnacionales'=>$objnacionales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $objnacionales = ObjetivoNacional::all();        
        return view('planseguimientos.objnacionales.create',['objnacionales'=>$objnacionales]);
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
      $objnacional = new ObjetivoNacional;      
      $objnacional->v_desobjnac = $request->v_desobjnac;            
      $objnacional->i_codplan = 1; //temporalmente varible estatica           
      $objnacional->i_usureg = $user->id;
      $objnacional->i_usumod = $user->id;
      $objnacional->i_estreg = 1;     
      $objnacional->save();                  
      //return redirect()->back();
      return redirect()->action('ObjetivosNacionalesController@index');
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
        $objnacional = ObjetivoNacional::find($id);
        return view('planseguimientos.objnacionales.edit',['objnacional'=>$objnacional]);
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
      $objnacional = ObjetivoNacional::find($id);      
      $objnacional->v_desobjnac = $request->v_desobjnac;                  
      $objnacional->i_usureg = $user->id;
      $objnacional->i_usumod = $user->id;
      $objnacional->i_estreg = 1;     
      $objnacional->save();                  
      // return redirect()->back();
      return redirect()->action('ObjetivosNacionalesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objnacional = ObjetivoNacional::find($id);
        $objnacional->delete();
        return redirect()->action('ObjetivosNacionalesController@index');
    }
}
