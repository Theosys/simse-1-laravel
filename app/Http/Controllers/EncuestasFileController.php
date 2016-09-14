<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//added for me
use Session;
use Storage;
use App\FileUpload;
use App\TMPFileUpload;
use Auth;


class EncuestasFileController extends Controller
{

    public function upload(Request $request)
    {
        if($request->file('survey_file')) {
            $file = $request->file('survey_file');
            $name_file = $file->getClientOriginalName();
            return json_encode($name_file);
        /*
            Storage::disk('solicitudes_usuario')->put($name_file, File::get($file));
            $archivo = new ArchivoSol;
            $archivo->v_desarchivo = $name_file;
            $archivo->v_destipo = 'application/pdf';
            $archivo->i_estreg = 1;
            $archivo->save();
            $usuario = User::find($i_codusu);
            $usuario->i_codarchivo = $archivo->i_codarchivo;
            $usuario->save();
        */
        }
    }   
}
