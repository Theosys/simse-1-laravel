<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
	protected $table = 'cntbd_alternativa';
	protected $primaryKey = 'i_codalt'; 

	public function pregunta(){
		return $this->belongsTo('App\Pregunta','i_codpreg','i_codpreg');
	}

	public static function asequible(){
		

		$q="<br>select 1 from cntbd_alternativa where i_codpreg = ".(int)$key3." and i_parent=".(int)$key2." and i_opcion=".(int)$opcion;
	}
}
