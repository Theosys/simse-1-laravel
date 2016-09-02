<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Respuesta;
use App\Subrespuesta;

class Cuestionario extends Model{
    
    protected $table = 'cntbc_cuestionario';
    protected $primaryKey = 'i_codcuest';
    
    public function versiones()
    {
    	return $this->hasMany('App\CuestionarioVersion','i_codcuest','i_codcuest');
    }
}
