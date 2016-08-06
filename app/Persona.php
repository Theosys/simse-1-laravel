<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Provincia;
use App\Distrito;

class Persona extends Model
{
    protected $table = 'cntbc_persona';
    protected $primaryKey = 'i_codpersona';

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

    public function operadores()
    {
      return $this->belongsToMany('App\Operador', 'cntbd_operacontac', 'i_codpersona', 'i_codopera')
        ->withPivot('i_usureg', 'i_usumod')
        ->withTimestamps();
    }

}
