<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
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
    var $param;
    var $areas;
    var $cargos;
    var $roles;

    public function __construct()
    {
      $this->setAreas();
      $this->setCargos();
      $this->setRoles();
    }

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
        
        $contactos = Persona::noUserAccount();
        return view('usuarios.create', ['method'=>'POST','route'=>['usuarios.store'],'areas' => $this->areas, 'cargos' => $this->cargos,
          'roles' => $this->roles, 'contactos' => $contactos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->build($request,'C');
        $i_codusu = User::crud($this->param);
/*
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
*/        
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
        $row_user = User::find($id);
        $row_persona = Persona::find($row_user->i_codpersona);
        return view('usuarios.edit',['method'=>'PUT','route'=>['usuarios.update',$row_user->id],'row_user'=>$row_user,'row_persona'=>$row_persona, 'areas' => $this->areas, 'cargos' => $this->cargos, 'roles' => $this->roles]);

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
        $this->build($request,'U');
        $i_codusu = User::crud($this->param);
        return redirect()->action('UsuariosController@index');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->build($request,'D');
        $i_codusu = User::crud($this->param);
        return $i_codusu;
    }

    private function build($post,$accion)
    {
      //this is the orden for stores and functions
      $user = User::find($post->get('i_codusu'));
      $password = ($post->password!="")?Hash::make($post->password):$user->password; 
      //!pendiente: test del proceso de cambio de clave
      $this->param = [
          "'".$accion."'",
          "'".(int)$post->get('i_codpersona')."'",
          "'".$post->get('v_numdni')."'",
          "'".$post->get('v_apepat')."'",
          "'".$post->get('v_apemat')."'",
          "'".$post->get('v_nombre')."'",
          "'".(int)$post->get('i_codcargo')."'",
          "'".$post->get('v_numtel')."'",
          "'".$post->get('v_email')."'",
          "'".Auth::user()->id."'",
          "'".Auth::user()->id."'",          
          "'".$post->get('v_coddis')."'",
          "'".$post->get('v_codpro')."'",
          "'".$post->get('v_coddep')."'",
          "'".(int)$post->get('i_codarea')."'",
          "'".(int)$post->get('i_tipoper')."'",
          "'".(int)$post->get('i_codusu')."'",
          "'".(int)$post->get('i_codrol')."'",
          "'".$post->get('v_name')."'",
          "'".$password."'",
          //'v_ubigeo' => $request->v_coddep.$request->v_codpro.$request->v_coddis,
          "'".$post->get('v_ubigeo')."'",
          "'".(int)$post->get('i_codarchivo')."'",
      ];
      
    }

    public function setAreas(){
      if(!isset($this->areas)){
        $this->areas = Area::all();
      }
    }

    public function setCargos(){
      if(!isset($this->cargos)){
        $this->cargos = Cargo::all();
      }
    }

    public function setRoles(){
      if(!isset($this->roles)){
        $this->roles = Rol::all();
      }
    }
}
