<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'cntbc_provincia';

    protected $cast = ['v_coddep' => 'string', 'v_codpro' => 'string'];

}
