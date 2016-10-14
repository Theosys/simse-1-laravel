<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provincia;
use App\Distrito;
use Session;
use DB;


class Operador extends Model
{
    protected $table = 'cntbc_operador';
    protected $primaryKey = 'i_codopera';

    public function encuestas()
    {
        return $this->belongsToMany('App\Encuesta', 'cntbd_operaencuest', 'i_codopera', 'i_codenc')
            ->withPivot('d_fecini', 'd_fecfin', 'i_usureg', 'i_usumod', 'i_estreg', 'n_complet', 'i_codarchivo', 'd_fecimport', 'i_codencimp')
            ->withTimestamps();
    }
    public function fullName()
    {
      return ucwords(strtolower($this->v_nombre)).' '.
      ucwords(strtolower($this->v_apepat)).' '.
      ucwords(strtolower($this->v_apemat));
    }

    public function departamento()
    {
      return $this->belongsTo('App\Departamento', 'v_coddep', 'v_coddep');
    }

    public function provincia()
    {
      //return $this->belongsTo('App\Provincia', 'v_codpro', 'xv_codpro');
      $provincia = Provincia::where('v_coddep', '=', $this->v_coddep)->where('v_codpro', '=', $this->v_codpro)->get()->first();
      $result = ['st'=>false];
      if($provincia!=null){
        $result = $provincia->toArray();
        $result['st'] = true;
      }
      return (object)$result;
    }

    public function distrito()
    {
      //return $this->belongsTo('App\Distrito', 'v_coddis', 'v_coddis');
      $distrito = Distrito::where('v_coddep', '=', $this->v_coddep)->where('v_codpro', '=', $this->v_codpro)->where('v_coddis', '=', $this->v_coddis)->get()->first();
      $result = ['st'=>false];
      if($distrito!=null){
        $result = $distrito->toArray();
        $result['st'] = true;
      }
      return (object)$result;
    }

    public static function crud($param)
    {
        $query = "select CRUDOperador(".implode(',',$param).") as i_codopera";
        $result  =  DB::select($query);
        return $result[0]->i_codopera;       
    }

    public function scopeSearch($query, $des, $dep)
    {
      return $query->where('v_desoperador','LIKE',"%".$des ."%")->where('v_coddep',$dep);
    }
    
    public function representantes() {
        return $this->belongsToMany('App\Persona','cntbd_operarepre','i_codopera','i_codpersona');
    }

    public function operadores() {
        return $this->belongsToMany('App\Persona','cntbd_operacontac','i_codopera','i_codpersona');
    }

}
