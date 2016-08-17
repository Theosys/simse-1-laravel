<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\PlanSeguimiento;

use Auth;

class PlanSeguimientosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $planseguimientos = PlanSeguimiento::all();
      return view('planseguimientos.index', ['planseguimientos' => $planseguimientos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
      return view('planseguimientos.create');
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
      $planseg = new PlanSeguimiento;      
      $planseg->v_desplan = $request->v_desplan;
      $planseg->v_sigla = $request->v_sigla;
      $planseg->d_fecini = $request->d_fecini;
      $planseg->d_fecfin = $request->d_fecfin;      
      $planseg->i_usureg = $user->id;
      $planseg->i_usumod = $user->id;      
      $planseg->i_estreg = 1;
      $planseg->save();
      return redirect()->action('PlanSeguimientosController@index');
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
        $planseg = PlanSeguimiento::find($id);        
        return view('planseguimientos.edit', ['planseg' => $planseg]);
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
        $planseg = PlanSeguimiento::find($id);
        $planseg->v_desplan = $request->v_desplan;
        $planseg->v_sigla = $request->v_sigla;
        $planseg->d_fecini = $request->d_fecini;
        $planseg->d_fecfin = $request->d_fecfin;        
        $planseg->i_usumod = Auth::user()->id;
        $planseg->save();
        return redirect()->action('PlanSeguimientosController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planseg = PlanSeguimiento::find($id);
        $planseg->delete();
        return redirect()->action('PlanSeguimientosController@index');
    }
}
