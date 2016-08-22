<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $table = 'cntbd_accion';
    protected $primaryKey = 'i_codaccion';

    public function indicadores()
    {
        return $this->hasMany('App\Indicador','i_codind','i_codind');
    }
    public function actores() {
    	return $this->belongsToMany('App\Actor','cntbd_actoacci','i_codaccion','i_codact');
    }
    public function objEspecifico()
    {
        return $this->belongsTo('App\ObjetivoEspecifico','i_codobjesp','i_codobjesp');
    }
}
