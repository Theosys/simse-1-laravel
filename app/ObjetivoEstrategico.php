<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoEstrategico extends Model
{
    protected $table ='cntbd_objetivoest';
    protected $primaryKey ='i_codobjest';

    public function objEspecificos()
    {
        return $this->hasMany('App\ObjetivoEspecifico','i_codobjesp', 'i_codobjesp');
    }

    public function objNacional()
    {
        return $this->belongsTo('App\ObjetivoNacional','i_codobjnac','i_codobjnac');
    }
    public function institucion()
    {
        return $this->belongsTo('App\Institucion','i_codinst','i_codinst');
    }
}
