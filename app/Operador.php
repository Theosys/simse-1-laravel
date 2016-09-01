<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provincia;
use App\Distrito;


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
      return Provincia::where('v_coddep', '=', $this->v_coddep)
        ->where('v_codpro', '=', $this->v_codpro)->get()->first();
    }

    public function distrito()
    {
      return Distrito::where('v_coddep', '=', $this->v_coddep)
        ->where('v_codpro', '=', $this->v_codpro)
        ->where('v_coddis', '=', $this->v_coddis)->get()->first();

    }

}
