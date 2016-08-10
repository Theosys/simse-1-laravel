<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EncuestaOperador extends Model
{
    protected $table = 'cntbd_operaencuest';

     public static function getOpEnc()
    {
      $openc = self::query()->select('i_codopera', 'i_codenc','d_fecini', 'd_fecfin')->get();
      return $openc;
    }
}
