<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Session;
use DB;
use Hash;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'i_codpersona', 'i_codrol', 'v_ubigeo', 'i_usureg', 'i_usumod', 'i_codarchivo', 'i_estreg'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function persona()
    {
      return $this->belongsTo('App\Persona', 'i_codpersona', 'i_codpersona');
    }

    public static function crud($param,$new_password='',$old_password='')
    {
        $query = "select CRUDUsuario(".implode(',',$param).") as i_codusu";
        $result  =  DB::select($query);
        if($new_password!=$old_password && $new_password!=''){
            $usuario = User::find($result[0]->i_codusu);
            $usuario->password = Hash::make($new_password);
            $usuario->save();
        }
        return $result[0]->i_codusu;       
    }

}
