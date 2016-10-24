<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'cntbc_encuesta';
    protected $primaryKey = 'i_codenc';


    public function tipoorganismo()
    {
        return $this->belongsTo('App\TipOrganismo', 'i_codtiporg', 'i_codtiporg');
    }


    public function indicadores(){
      return $this->belongsToMany('App\Indicador', 'cntbd_encuestaind', 'i_codenc', 'i_codind');
    }

    /*select cntbd_encuestaind.* from cntbc_encuesta
    inner join cntbd_encuestaind on (cntbd_encuestaind.i_codenc=cntbc_encuesta.i_codenc)
    inner join cntbd_indicador on (cntbd_encuestaind.i_codind =cntbd_indicador.i_codind)
    where cntbd_encuestaind.i_codenc=11
    */

    public function preguntas(){
      return $this->belongsToMany('App\Pregunta', 'cntbd_encuestaind', 'i_codenc', 'i_codpreg')
        ->withPivot('i_codind')
        ->withTimestamps()
        ->orderBy('i_numpreg');
    }

    public function respuestas(){
        $respuestas = Respuesta::where('i_codenc', '=', $this->i_codenc)->get();
        return $respuestas;
    }

    public function version(){
        return $this->belongsTo('App\CuestionarioVersion','i_codver');    
    }
    public function frecuencia(){
        return $this->belongsTo('App\Frecuencia','i_codfre');    
    }
    // public function tiporganismo()
    // {
    //     return $this->belongsTo('App\TipOrganismo', 'i_codtiporg', 'i_codtiporg');
    // }
}
