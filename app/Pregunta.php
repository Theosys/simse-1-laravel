<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'cntbd_pregunta';
    protected $primaryKey = 'i_codpreg';
    protected $appends = array('ind','i_clave');

    public function alternativas(){
        return $this->hasMany('App\Alternativa','i_codpreg','i_codpreg');
    }

    public function subpreguntas(){
        return $this->hasMany('App\Subpregunta','i_codpreg','i_codpreg');
    }

<<<<<<< HEAD
    public function versiones() {
        return $this->belongsToMany('App\CuestionarioVersion','cntbd_estructcuest','i_codpreg','i_codver');
    }    
=======
    /*public function respuestas()
    {
        return $this->hasMany('App\Respuesta','i_codopera','i_codopera')->where('i_codenc',10)->get();
    }*/
>>>>>>> master
}
