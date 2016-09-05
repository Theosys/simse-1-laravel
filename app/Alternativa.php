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
}
