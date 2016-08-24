<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuestionarioVersion extends Model
{
    protected $table = 'cntbd_cuestversion';
    protected $primaryKey = 'i_codver';

    public function cuestionario()
    {
        return $this->belongsTo('App\Cuestionario','i_codcuest','i_codcuest');
    }
}
