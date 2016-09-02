<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cuestionario;
use App\CuestionarioVersion;
use Auth;

class CuestionarioVersionesController extends Controller
{
    public function index()    
    {        
        $cuestionarios = Cuestionario::where('i_codinst','=',1)->get();        
        $versiones = CuestionarioVersion::where('i_estreg','=',1)->get();
        //dd($request);        
        return view('cuestionarios.versiones.create', ['versiones' => $versiones]);
    }

    public function store(Request $request)
    {        
        $version = new CuestionarioVersion;
        $user = Auth::user();
        $version->v_desver = $request->v_desver;
        $version->d_fecvig = $request->d_fecvig;
        $version->i_codcuest = $request->i_codcuest;
        $version->i_usureg = $user->id;
        $version->i_usumod = $user->id;        
        $version->i_estreg = 1;
        $version->save();
        return redirect()->action('CuestionarioVersionesController@index');
    }

    public function edit($id)
    {
        $version = CuestionarioVersion::find($id);        
        return view('cuestionarios.versiones.edit', ['version' => $version]);
    }
    
    public function update(Request $request, $id)
    {
        $version = CuestionarioVersion::find($id);
        $user = Auth::user();
        $version->v_desver = $request->v_desver;
        $version->d_fecvig = $request->d_fecvig;
        $version->i_codcuest = $request->i_codcuest;
        $version->i_usumod = $user->id;
        $version->i_usureg = $user->id;
        $version->i_estreg = $request->i_estreg;
        $version->save();
        return redirect()->action('CuestionarioVersionesController@index');
    }

    public function destroy($id)
    {
        $version = CuestionarioVersion::find($id);
        $version->delete();
        return redirect()->action('CuestionarioVersionesController@index');
    }
}
