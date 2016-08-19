<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObjetivoNacional extends Model
{
    protected $table ='cntbd_objetivonaci';
    protected $primaryKey ='i_codobjnac';

    public function objEstrategicos()
    {
        return $this->hasMany('App\ObjetivoEstrategico');
    }

}
