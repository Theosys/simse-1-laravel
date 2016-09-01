<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frecuencia extends Model
{
    protected $table = 'cntbc_frecuencia';
    protected $primaryKey = 'i_codfre';

    public function encuestas()
    {
        return $this->hasMany('App\Encuestas','i_codfre');
    }
}
