<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuestionarioVersion extends Model
{
    protected $table = 'cntbd_cuestversion';
    protected $primaryKey = 'i_codver';

    public function cuestionario()
    {
        return $this->belongsTo('App\Cuestionario','i_codcuest','i_codcuest');
    }

    public function preguntas(){
      return $this->belongsToMany('App\Pregunta', 'cntbd_estructcuest', 'i_codver', 'i_codpreg')->withPivot(['i_clave'])->withTimestamps();
    }

    public function encuestas()
    {
        return $this->hasMany('App\Encuesta','i_codver');
    }

    public function indicadores(){        
        return EstructuraCuestionario::where('i_codver', $this->i_codver)->get();
    }
}
