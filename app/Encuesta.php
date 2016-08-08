<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'cntbc_encuesta';
    protected $primaryKey = 'i_codenc';

    public function tiporganismo()
    {
        return $this->belongsTo('App\TipOrganismo', 'i_codtiporg', 'i_codtiporg');
    }

}
