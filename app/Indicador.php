<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    protected $table = 'cntbd_indicador';
    protected $primaryKey = 'i_codind';
    
    public function accion()
    {
        return $this->belongsTo('App\Accion','i_codaccion','i_codaccion');
    }
}

	