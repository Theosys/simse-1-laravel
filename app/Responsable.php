<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    protected $table = 'cntbc_responsable';
    protected $primarykey = 'i_codres';

    public function acciones() {
    	return $this->belongsToMany('App\Accion','cntbd_responacci','i_codres','i_codaccion');
   }
}
