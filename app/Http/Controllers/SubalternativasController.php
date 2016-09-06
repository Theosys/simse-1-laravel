<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subpregunta;
use App\Subalternativa;
use Auth;

class SubsubalternativasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subalternativas = Subalternativa::all();        
        return view('subalternativas.index', ['subalternativas' => $subalternativas]);
    }
    public function agregar($id)
    {
        $pregunta = Subpregunta::find($id);
        $subalternativas = Subalternativa::where('i_codpreg',$id)->get();
        //$clave=Alternativa::where('i_codpreg',$id)->where('i_clave',1)->get();        
        return view('subalternativas.create',['pregunta'=>$pregunta,'subalternativas'=>$subalternativas]);
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
      $alter = new Subalternativa;
      $alter->i_codpreg = $request->i_codpreg;      
      $alter->v_desalt = $request->v_desalt;      
      $alter->v_resumen = $request->v_resumen;      
      $alter->i_usureg = $user->id;
      $alter->i_usumod = $user->id;
      $alter->i_estreg = 1;     
      $alter->save();                  
      return redirect()->back();
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
        $alternativa = Subalternativa::find($id);
        return view('subalternativas.edit',['alternativa'=>$alternativa]);
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
        $alter = Subalternativa::find($id);
        $alter->i_codpreg = $request->i_codpreg;      
        $alter->v_dessubpreg = $request->v_desalt;      
        $alter->v_resumen = $request->v_resumen;      
        $alter->i_usureg = $user->id;             
        $alter->save();                  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alter = Subalternativa::find($id);
        $alter->delete();        
        return redirect()->back();
    }
}
