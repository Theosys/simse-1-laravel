<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UsuarioRequest;
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
use Redirect;
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
    var $old_password;
    var $new_password;
    public function __construct()
    {
      $this->setAreas();
      $this->setCargos();
      $this->setRoles();
    }

    public function index()
    {
        $usuarios = User::where('i_estreg','!=','0')->get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    public function registraranonimo(UsuarioRequest $request)
    {
      //recordar crear un Request para esta función
      $this->build($request,'C');
      $i_codusu = User::crud($this->param,$this->new_password,$this->old_password);
      $bitmsg =0;
      if($usuario = User::find($i_codusu)){
        $usuario->i_estreg = 2;
        $usuario->save();
        $bitmsg = 1;
      }
      
      return redirect('/registrado/'.$bitmsg);
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
          'roles' => $this->roles, 'contactos' => $contactos, 'disabled_input_username'=>0]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $this->build($request,'C');
        $i_codusu = User::crud($this->param,$this->new_password,$this->old_password);

        if ($request->file('file_sol')) {
          $file = $request->file('file_sol');
          $name_file = $file->getClientOriginalName();
          Storage::disk('solicitudes_usuario')->put($name_file, File::get($file));
          $archivo = new ArchivoSol;
          $archivo->v_desarchivo = $name_file;
          $archivo->v_destipo = 'application/pdf';
          $archivo->i_estreg = 1;
          $archivo->save();

          $usuario = User::find($i_codusu);
          $usuario->i_codarchivo = $archivo->i_codarchivo;
          $usuario->save();
        }
      
        return redirect()->action('UsuariosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $row_user = User::find(Auth::user()->id);
        $row_persona = Persona::find($row_user->i_codpersona);   
        return view('usuarios.perfil',['method'=>'PUT','route'=>['usuarios.updateperfil',$row_user->id],'row_user'=>$row_user,'row_persona'=>$row_persona,'disabled_input_username'=>1]);
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
        return view('usuarios.edit',['method'=>'PUT','route'=>['usuarios.update',$row_user->id],'row_user'=>$row_user,'row_persona'=>$row_persona, 'areas' => $this->areas, 'cargos' => $this->cargos, 'roles' => $this->roles,'disabled_input_username'=>0]);

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
        $i_codusu = User::crud($this->param,$this->new_password,$this->old_password);
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
      $this->old_password =($user==null)?'':$user->password;
      $this->new_password = $post->v_password;
      
      $user_session_id = (int)(Auth::user()==null)?0:Auth::user()->id;
      $this->param = [
          "'".$accion."'",
          "'".(int)$post->get('i_codpersona')."'",
          "'".str_replace("'",'"',$post->get('v_numdni'))."'",
          "'".str_replace("'",'"',$post->get('v_apepat'))."'",
          "'".str_replace("'",'"',$post->get('v_apemat'))."'",
          "'".str_replace("'",'"',$post->get('v_nombre'))."'",
          "'".(int)$post->get('i_codcargo')."'",
          "'".str_replace("'",'"',$post->get('v_numtel'))."'",
          "'".str_replace("'",'"',$post->get('v_email'))."'",
          "'".$user_session_id."'",
          "'".$user_session_id."'",          
          "'".str_replace("'",'"',$post->get('v_coddis'))."'",
          "'".str_replace("'",'"',$post->get('v_codpro'))."'",
          "'".str_replace("'",'"',$post->get('v_coddep'))."'",
          "'".(int)$post->get('i_codarea')."'",
          "'".(int)$post->get('i_tipoper')."'",
          "'".(int)$post->get('i_codusu')."'",
          "'".(int)$post->get('i_codrol')."'",
          "'".str_replace("'",'"',$post->get('name'))."'",
          "''",
          //'v_ubigeo' => $request->v_coddep.$request->v_codpro.$request->v_coddis,
          "'".str_replace("'",'"',$post->get('v_ubigeo'))."'",
          "'".(int)$post->get('i_codarchivo')."'",
          "'".(int)$post->get('i_codopera')."'",
          "'".(int)$post->get('i_estreg')."'",
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
