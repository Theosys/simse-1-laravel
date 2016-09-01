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
        //return $this->hasMany('App\Respuesta','i_codopera','i_codopera');
        return Respuesta::where('i_codopera','=',$this->i_codopera)->where('i_codenc','=',$this->i_codenc)->get();
    }
    public function subrespuestas(){
        //return $this->hasMany('App\Subrespuesta','i_codopera','i_codopera');
        return Subrespuesta::where('i_codopera','=',$this->i_codopera)->where('i_codenc','=',$this->i_codenc)->get();
    }
}
