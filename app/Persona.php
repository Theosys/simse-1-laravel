<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Session;
use App\Provincia;
use App\Distrito;
use DB;
class Persona extends Model
{
    protected $table = 'cntbc_persona';
    protected $primaryKey = 'i_codpersona';
    protected $fillable = ["i_codpersona", "v_numdni", "v_apepat", "v_apemat", "v_nombre", "i_codcargo", "v_numtel", "v_email", "created_at", "i_usureg", "updated_at", "i_usumod", "i_estreg", "v_coddis", "v_codpro", "v_coddep", "i_codarea", "i_tipoper"];

    public static function noUserAccount()
    {
      $persons = self::query()->leftjoin('users as us', 'cntbc_persona.i_codpersona',
        '=', 'us.i_codpersona')
        ->where('us.i_codpersona', null)
        ->get(['cntbc_persona.i_codpersona', 'v_apepat', 'v_apemat', 'v_nombre', 'v_numdni']);
      return $persons;
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
      return $this->belongsTo('App\Provincia', 'v_codpro', 'v_codpro');
      //return Provincia::where('v_coddep', '=', $this->v_coddep)->where('v_codpro', '=', $this->v_codpro)->get()->first();
    }

    public function distrito()
    {
      return $this->belongsTo('App\Distrito', 'v_coddis', 'v_coddis');
      
      //return Distrito::where('v_coddep', '=', $this->v_coddep)->where('v_codpro', '=', $this->v_codpro)->where('v_coddis', '=', $this->v_coddis)->get()->first();
    }

    public function operadores()
    {
      return $this->belongsToMany('App\Operador', 'cntbd_operacontac', 'i_codpersona', 'i_codopera')
        ->withPivot('i_usureg', 'i_usumod')
        ->withTimestamps();
    }


}
