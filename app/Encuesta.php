<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'cntbc_encuesta';
    protected $primaryKey = 'i_codenc';

    public function indicadores(){
      return $this->belongsToMany('App\Indicador', 'cntbd_encuestaind', 'i_codenc', 'i_codind')
        ->withPivot('i_codpreg')
        ->withTimestamps();
    }
}
