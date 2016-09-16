<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use App\User;
use App\Persona;
use App\ArchivoSol;
use Auth;
use Hash;
use Storage;
use File;

class PerfilController extends Controller
{
    
    public function index()
    {
        $id = (int)Auth::user()->id;
        $row_user = User::find($id);
        $row_persona = Persona::find($row_user->i_codpersona);   
        return view('usuarios.profile',['method'=>'PUT','route'=>['miperfil.update',$row_user->id],'row_user'=>$row_user,'row_persona'=>$row_persona,'disabled_input_username'=>1]);
    }
    

    public function update(Request $request, $id)
    {
      //no usar el id de paso x seguridad
      $usuario = User::find(Auth::user()->id);
      $usuario->email = $request->get('v_email');
      $usuario->v_ubigeo = $request->get('v_coddep').$request->get('v_codpro').$request->get('v_coddis');
      if($request->get('password') != $usuario->password && $request->get('password')!=''){
        $usuario->password = Hash::make($request->get('password'));
      }
      $persona = Persona::find($usuario->i_codpersona);
      $usuario->save();
      
      $persona->v_numdni = $request->get('v_numdni');
      $persona->v_apepat = $request->get('v_apepat');
      $persona->v_apemat = $request->get('v_apemat');
      $persona->v_nombre = $request->get('v_nombre');
      $persona->v_numtel = $request->get('v_numtel');
      $persona->v_coddep = $request->get('v_coddep');
      $persona->v_codpro = $request->get('v_codpro');
      $persona->v_coddis = $request->get('v_coddis');
      $persona->v_email = $request->get('v_email');
      $persona->save();
      flash('Estimado, '.$persona->v_nombre.', Se ha guardado con exito sus datos', 'success');
      return redirect()->action('PerfilController@index');
    }


}
