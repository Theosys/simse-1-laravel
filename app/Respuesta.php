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
}
