<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPreguntaClase extends Model
{
  protected $table = 'cntbc_tipopregclase';
  protected $primaryKey = 'I_CODTIPCLAS';
  public $timestamps = false;
}
