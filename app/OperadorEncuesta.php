<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Respuesta;
use App\Subrespuesta;

class OperadorEncuesta extends Model
{
    protected $table = 'cntbd_operaencuest';

    public static function buscar($operador, $encuesta){
        return OperadorEncuesta::where('i_codopera', $operador)->where('i_codenc', $encuesta)->get()->first();
    }
    public function respuestas(){
        $prg_respuestas = Respuesta::where('i_codopera','=',$this->i_codopera)
        ->where('i_codenc','=',$this->i_codenc)
        ->where('i_estreg','=','1')
        ->get();
        $result =[];
        foreach($prg_respuestas as $respuesta){
            $result[$respuesta->i_codalt] = $respuesta->v_desreptex;
        }
        return $result;
    }
    public function subrespuestas(){
        return Subrespuesta::where('i_codopera','=',$this->i_codopera)->where('i_codenc','=',$this->i_codenc)->get();
    }
}
