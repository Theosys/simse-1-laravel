<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'cntbd_respregunta';

    public function pregunta(){
        return $this->belongsTo('App\Pregunta','i_codpreg','i_codpreg');
    }

    public function alternativa(){
        return $this->belongsTo('App\Alternativa','i_codalt','i_codalt');
    }

    public static function buscar($operador, $encuesta, $pregunta, $alternativa){
        return Respuesta::where('i_codopera', $operador)
            ->where('i_codenc', $encuesta)
            ->where('i_codpreg', $pregunta)
            ->where('i_codalt', $alternativa)->get()->first();
    }
}
