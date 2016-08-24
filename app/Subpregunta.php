<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpregunta extends Model
{
    protected $table = 'cntbd_subpregunta';
    protected $primaryKey = 'i_codsubpreg';

    public function pregunta()
    {
        return $this->belongsTo('App\Pregunta', 'i_codpreg','i_codpreg');
    }

    public function alternativas(){
        return $this->hasMany('App\Subalternativa','i_codsubpreg','i_codsubpreg');
    }
}
