<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
}
