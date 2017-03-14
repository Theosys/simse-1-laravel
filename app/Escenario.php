<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escenario extends Model
{
    protected $table = 'escenario';
    protected $primaryKey = 'i_codescenario';

    // public function dataEscenario ()
    // {
    // 	return $this->hasMany('App\dataEscenario');
    // }
}