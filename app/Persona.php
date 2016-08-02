<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'cntbc_persona';
    protected $primaryKey = 'i_codpersona';
    public $timestamps = false;
}
