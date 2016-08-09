<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipOrganismo extends Model
{
    protected $table = 'cntbc_tiporganismo';
    protected $primaryKey = 'i_codtiporg';
    
    public function totalorganismo()
    {
        return $this->belongsTo('App\TotalOrganismo', 'i_codtiporg', 'i_codtiporg');
    }
}
