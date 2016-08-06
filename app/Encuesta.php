<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table = 'cntbc_encuesta';
    protected $primaryKey = 'i_codenc';
}
