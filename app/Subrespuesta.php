<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subrespuesta extends Model
{
    protected $table = 'cntbd_respsubpreg';

    public static function buscar($operador, $encuesta, $pregunta, $subpregunta, $subalternativa){
        return Subrespuesta::where('i_codopera', $operador)
            ->where('i_codenc', $encuesta)
            ->where('i_codpreg', $pregunta)
            ->where('i_codsubpreg', $subpregunta)
            ->where('i_codsubalt', $subalternativa)->get()->first();
    }
}
