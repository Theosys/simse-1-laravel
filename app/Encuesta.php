<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'cntbc_encuesta';
    protected $primaryKey = 'i_codenc';

<<<<<<< HEAD
    public function tipoorganismo()
    {
        return $this->belongsTo('App\TipOrganismo', 'i_codtiporg', 'i_codtiporg');
    }

=======
>>>>>>> master
    public function indicadores(){
      return $this->belongsToMany('App\Indicador', 'cntbd_encuestaind', 'i_codenc', 'i_codind');
    }
    public function preguntas(){
      return $this->belongsToMany('App\Pregunta', 'cntbd_encuestaind', 'i_codenc', 'i_codpreg')
        ->withPivot('i_codind')
        ->withTimestamps();
    }

    public function respuestas(){
        $respuestas = Respuesta::where('i_codenc', '=', $this->i_codenc)->get();
        return $respuestas;
    }
<<<<<<< HEAD
    public function version(){
        return $this->belongsTo('App\CuestionarioVersion','i_codver');    
    }
    public function frecuencia(){
        return $this->belongsTo('App\Frecuencia','i_codfre');    
    }
    
=======

    public function tiporganismo()
    {
        return $this->belongsTo('App\TipOrganismo', 'i_codtiporg', 'i_codtiporg');
    }
>>>>>>> master
}
