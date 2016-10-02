<?php

namespace App\Http\Controllers;

use App\Cuestionario;
use App\OperadorEncuesta;
use App\Respuesta;
use App\Subrespuesta;
use Illuminate\Http\Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Indicador;

use App\Encuesta;
use App\TipoOrganismo;
use App\Operador;
use App\Pregunta;
use App\CuestionarioVersion;
use App\Frecuencia;
use Auth;
class EncuestasABCController extends Controller
{
	public function index()
	{
		/*código copiado de EncuestasController
		begin */
		$encuestas = Encuesta::get()->sortByDesc('created_at')->lists('v_desenc','i_codenc');
        $tipoOrganismos = TipoOrganismo::get()->lists('v_destiporg','i_codtiporg');
        $operador = Auth::user()->persona->operadores->first();
        $encuestasOperador = $operador->encuestas->sortByDesc('i_codenc');
            
        return response()
            ->view('encuestas/indexABC', [
                'encuestas'=>$encuestas,
                'tipoOrganismos'=>$tipoOrganismos,
                'encuestasOperador'=>$encuestasOperador
            ]);
        /*código copiado de EncuestasController
		end */
	}

	public function edit($i_codopera, $i_codenc)
	{
		/*código copiado de EncuestasController
		begin */
		$indicadores = Encuesta::find($i_codenc)->indicadores->unique('i_codind')->sortBy('i_numind');
        $preguntas = Encuesta::find($i_codenc)->preguntas;
        $respuestas = OperadorEncuesta::buscar($i_codopera, $i_codenc)->respuestas();
        $subrespuestas = OperadorEncuesta::buscar($i_codopera, $i_codenc)->subrespuestas();
        $enc = Encuesta::find($i_codenc);
        return response()
            ->view('encuestas/editarABC',[
                'indicadores'=>$indicadores,
                'encuesta'=>$enc,
                'preguntas'=>$preguntas,
                'operador'=>$i_codopera,
                'respuestas'=>$respuestas,
                'subrespuestas'=>$subrespuestas]);
        /*código copiado de EncuestasController
		end */

	}
}
