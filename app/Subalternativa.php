<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subalternativa extends Model
{
    protected $table = 'cntbd_subalternativa';
    protected $primaryKey = 'i_codsubalt';

    public function subpregunta(){
		return $this->belongsTo('App\Subpregunta','i_codsubpreg','i_codsubpreg');
	}
}
