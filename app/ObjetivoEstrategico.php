<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoEstrategico extends Model
{
    protected $table ='cntbd_objetivoest';
    protected $primaryKey ='i_codobjest';

    public function objEspecificos()
    {
        return $this->hasMany('App\ObjetivoEspecifico');
    }

    public function objNacional()
    {
        return $this->belongsTo('App\ObjetivoNacional');
    }
}
