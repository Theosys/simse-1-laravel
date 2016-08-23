<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accion extends Model
{
    protected $table = 'cntbd_accion';
    protected $primaryKey = 'i_codaccion';

    public function indicadores()
    {
        return $this->hasMany('App\Indicador','i_codaccion','i_codaccion');
    }
    public function actores() {
        return $this->belongsToMany('App\Actor','cntbd_actoacci','i_codaccion','i_codact');
    }
    public function responsables() {
    	return $this->belongsToMany('App\Responsables','cntbd_responacci','i_codaccion','i_codres');
    }
    public function objEspecifico()
    {
        return $this->belongsTo('App\ObjetivoEspecifico','i_codobjesp','i_codobjesp');
    }
}
