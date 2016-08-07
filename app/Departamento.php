<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'cntbc_departamento';

    protected $cast = ['v_coddep' => 'string'];
}
