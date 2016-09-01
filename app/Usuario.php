<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'cntbc_usuario';
    protected $primaryKey = 'i_codusu';
    public $timestamps = false;

    public function persona()
    {
      return $this->belongsTo('App\Persona', 'i_codpersona', 'i_codpersona');
    }
}
