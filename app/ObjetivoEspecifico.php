<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoEspecifico extends Model
{
    protected $table ='cntbd_objetivoesp';
    protected $primaryKey ='i_codobjesp';
    
    public function acciones()
    {
        return $this->hasMany('App\Accion','i_codaccion','i_codaccion');
    }

    public function objEstrategico()
    {
        return $this->belongsTo('App\ObjetivoEstrategico','i_codobjest','i_codobjest');
    }
}
