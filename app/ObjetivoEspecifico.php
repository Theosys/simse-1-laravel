<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoEspecifico extends Model
{
    protected $table ='cntbd_objetivoesp';
    protected $primaryKey ='i_codobjesp';
    
    public function objEstrategico()
    {
        return $this->belongsTo('App\ObjetivoEstrategico');
    }
}
