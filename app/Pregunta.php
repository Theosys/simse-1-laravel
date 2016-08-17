<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'cntbd_pregunta';
    protected $primaryKey = 'i_codpreg';

    function subpreguntas(){
    	return $this->hasMany('App\Subpregunta');
    }
}
