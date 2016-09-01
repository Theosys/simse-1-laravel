<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Persona;
use App\Area;
use App\Cargo;
use App\Rol;
use App\Departamento;
use App\ArchivoSol;
use Auth;
use Hash;
use Storage;
use File;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::all();
        $cargos = Cargo::all();
        $roles = Rol::all();
        $contactos = Persona::noUserAccount();
        return view('usuarios.create', ['areas' => $areas, 'cargos' => $cargos,
          'roles' => $roles, 'contactos' => $contactos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'v_numdni' => 'digits:8',
        ]);
       
        if ($request->i_codpersona == null) {
          $persona = new Persona;
          $persona->v_numdni = $request->v_numdni;
          $persona->v_apepat = strtoupper($request->v_apepat);
          $persona->v_apemat = strtoupper($request->v_apemat);
          $persona->v_nombre = strtoupper($request->v_nombre);
          $persona->i_codcargo = $request->i_codcargo;
          $persona->v_numtel = $request->v_numtel;
          $persona->v_email = $request->v_email;
          $persona->i_usureg = Auth::user()->id;
          $persona->i_usumod = Auth::user()->id;
          $persona->i_estreg = 1;
          $persona->v_coddep = $request->v_coddep;
          $persona->v_codpro = $request->v_codpro;
          $persona->v_coddis = $request->v_coddis;
          $persona->i_codarea = $request->i_codarea;
          $persona->i_tipoper = 1;
          $persona->save();
        } else {
          $persona = Persona::find($request->i_codpersona);
        }

        $usuario = User::create([
          'name' => $request->v_name,
          'email' => $request->v_email,
          'i_codpersona' => $persona->i_codpersona,
          'i_codrol' => $request->i_codrol,
          'v_ubigeo' => $request->v_coddep.$request->v_codpro.$request->v_coddis,
          'i_usureg' => Auth::user()->id,
          'i_usumod' => Auth::user()->id,
          //'i_codarchivo' => 1,
          'i_estreg' => 1,
          'password' => Hash::make($request->v_password)
        ]);

        if ($request->file('file_sol')) {
          $file = $request->file('file_sol');
          $name_file = $file->getClientOriginalName();
          Storage::disk('solicitudes_usuario')->put($name_file, File::get($file));
          $archivo = new ArchivoSol;
          $archivo->v_desarchivo = $name_file;
          $archivo->v_destipo = 'application/pdf';
          $archivo->i_estreg = 1;
          $archivo->save();
          $usuario->i_codarchivo = $archivo->i_codarchivo;
        }

        return redirect()->action('UsuariosController@index');
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
