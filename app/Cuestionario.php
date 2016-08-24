<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Respuesta;

class Cuestionario extends Model
{
    //protected $table = 'cntbd_operaencuest';
    protected $table = 'cntbc_cuestionario';
    protected $primaryKey = 'i_codcuest';

    public static function buscar($operador, $encuesta){
        return Cuestionario::where('i_codopera', $operador)->where('i_codenc', $encuesta)->get()->first();
    }

    public function respuestas(){
        return Respuesta::where('i_codopera', '=', $this->i_codopera)->where('i_codenc', '=', $this->i_codenc)->get();
    }
}
