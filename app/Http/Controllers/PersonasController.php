<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Operador;
use App\Area;
use App\Cargo;
use App\Persona;
use Auth;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function crear_lista($oper, $accion)
    {
        $operador = Operador::find($oper);
        $areas = Area::all()->lists('v_desarea','i_codarea');
        $cargos = Cargo::all()->lists('v_descargo','i_codcargo');
        //$accion = $request->accion;
        //representante principal (P)
        if ($accion=="P") {
            $personas = $operador->representantes;
        }
        //personas de contacto en GRD (S:secundario) 
        elseif ($accion=="S") {            
            $personas = $operador->operadores;
        }
        else{
            $personas = $operador;
        }                        
        return view('personas.create',['operador'=>$operador, 'areas'=>$areas, 'cargos'=>$cargos, 'personas'=>$personas, 'accion'=>$accion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona;
        //dd($request);
        $persona->v_numdni = $request->v_numdni;
        $persona->v_apepat = $request->v_apepat;
        $persona->v_apemat = $request->v_apemat;
        $persona->v_nombre = $request->v_nombre;
        $persona->i_codarea = $request->i_codarea;
        $persona->i_codcargo = $request->i_codcargo;
        $persona->v_numtel = $request->v_numtel;
        $persona->v_email = $request->v_email;
        $persona->i_estreg = $request->i_estreg;
        $persona->i_usureg = Auth::user()->id;
        $persona->save();
        if ($request->accion=='P') {
            $persona->representantes()->sync(array($request->i_codopera));
        }
        else {
            $persona->operadores()->sync(array($request->i_codopera));
        }        
        return redirect()->action('PersonasController@crear_lista', ['oper' => $request->i_codopera,'accion' => $request->accion]);
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
        $persona = Persona::find($id);
        $areas = Area::all()->lists('v_desarea','i_codarea');
        $cargos = Cargo::all()->lists('v_descargo','i_codcargo');
        return view('personas.edit',['persona'=>$persona,'areas'=>$areas, 'cargos'=>$cargos]);
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
        $persona = Persona::find($id);
        $persona->v_numdni = $request->v_numdni;
        $persona->v_apepat = $request->v_apepat;
        $persona->v_apemat = $request->v_apemat;
        $persona->v_nombre = $request->v_nombre;
        $persona->i_codarea = $request->i_codarea;
        $persona->i_codcargo = $request->i_codcargo;
        $persona->v_numtel = $request->v_numtel;
        $persona->v_email = $request->v_email;
        $persona->i_estreg = $request->i_estreg;
        $persona->i_usureg = Auth::user()->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //dd($request);
        $persona = Persona::find($id);
        $persona->delete();
        if ($request->accion=='P') {
            $persona->representantes()->sync([]);
        }
        else {
            $persona->operadores()->sync([]);
        } 
        return redirect()->back();
    }
}
