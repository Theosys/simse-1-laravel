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
    public function crear_lista(Request $request)
    {
        $operador = Operador::find($request->i_codopera);
        $areas = Area::all()->lists('v_desarea','i_codarea');
        $cargos = Cargo::all()->lists('v_descargo','i_codcargo');
        $accion = $request->accion;
        //representante principal
        if ($request->accion=="R") {
            $personas = $operador->representantes;
        }
        //contacto grd
        else{
            $personas = $operador->contactos;
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
        if ($request->accion=='R') {
            $persona->representantes()->sync(array($request->i_codopera));
        }
        else {
            $persona->contactos()->sync(array($request->i_codopera));
        }
        //return redirect()->back()->withInput($request);
        //return redirect()->action('PersonasController@crear_lista')->withInput($request);
        //return redirect()->guest(route('personas.crear_lista')->with('accion', $reques->accion)->with('i_codopera', $request->i_codopera));
        return redirect()->action('PersonasController@crear_lista', ['accion' => $request->accion,'i_codopera' => $request->i_codopera]); 
        //return Redirect::to('personas.crear_lista')->withInput();
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
