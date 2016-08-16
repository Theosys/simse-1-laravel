<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use App\Provincia;
use App\Distrito;
>>>>>>> cenepred

class Operador extends Model
{
    protected $table = 'cntbc_operador';
    protected $primaryKey = 'i_codopera';
<<<<<<< HEAD
=======

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

>>>>>>> cenepred
}
