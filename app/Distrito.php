<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'cntbc_distrito';

    protected $cast = ['v_coddep' => 'string', 'v_codpro' => 'string', 'v_coddis' => 'string'];
}
