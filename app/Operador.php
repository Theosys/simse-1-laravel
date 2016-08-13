<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    protected $table = 'cntbc_operador';
    protected $primaryKey = 'i_codopera';

    public function encuestas(){
      return $this->belongsToMany('App\Encuesta', 'cntbd_operaencuest', 'i_codopera', 'i_codenc')
        ->withPivot('d_fecini','d_fecfin','i_usureg','i_usumod','i_estreg','n_complet','i_codarchivo','d_fecimport','i_codencimp')
        ->withTimestamps();
    }
}
