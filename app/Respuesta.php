<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Respuesta extends Model
{
    protected $table = 'cntbd_respregunta';

    public function pregunta(){
        return $this->belongsTo('App\Pregunta','i_codpreg','i_codpreg');
    }

    public function alternativa(){
        return $this->belongsTo('App\Alternativa','i_codalt','i_codalt');
    }

    public static function buscar($operador, $encuesta, $pregunta, $alternativa){
        return Respuesta::where('i_codopera', $operador)
            ->where('i_codenc', $encuesta)
            ->where('i_codpreg', $pregunta)
            ->where('i_codalt', $alternativa)->get()->first();
    }

    public static function insertar($i_codenc,$i_codpreg,$i_codalt,$v_desreptex,$i_index){
        $i_codopera = 1;
        $i_usureg = 1;
        $i_usumod = 1;
        DB::table('cntbd_respregunta')->insert([
            'i_codopera'=>$i_codopera,
            'i_codenc'=>$i_codenc,
            'i_codpreg'=>$i_codpreg,
            'i_codalt'=>$i_codalt,
            'v_desreptex'=>$v_desreptex,
            'i_index'=>$i_index,
            'created_at'=>'now()',
            'i_usureg'=>$i_usureg,
            'updated_at'=>'now()',
            'i_usumod'=>$i_usumod,
            'i_estreg'=>'1',
            'b_estado'=>'1'
        ]);
    }
}
