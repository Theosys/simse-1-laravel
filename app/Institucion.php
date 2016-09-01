<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    protected $table = 'cntbc_institucion';
    protected $primaryKey = 'i_codinst';

    public function objEstrategicos ()
    {
    	return $this->hasMany('App\ObjetivoEstrategico');
    }
}
