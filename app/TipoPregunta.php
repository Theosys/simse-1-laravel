<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPregunta extends Model
{
    protected $table = 'cntbc_tipopregunta';
    protected $primaryKey = 'I_CODTIPO';
    public $timestamps = false;
}
