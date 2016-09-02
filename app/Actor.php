<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
   protected $table = 'cntbc_actor';
   protected $primaryKey ='i_codact';

   public function acciones() {
    	return $this->belongsToMany('App\Accion','cntbd_actoacci','i_codact','i_codaccion');
   }
}
