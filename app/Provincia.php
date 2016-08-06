<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'cntbc_provincia';
    protected $primaryKey = 'v_codpro';

    public function departamento(){
    	return $this->belongsTo('App\Departamento','v_coddep');
    }
}
