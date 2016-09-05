<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'cntbc_provincia';
    protected $primaryKey ='v_codpro';
	protected $cast = ['v_coddep' => 'string', 'v_codpro' => 'string'];
    protected $fillable =["v_coddep","v_codpro","v_despro"];
}
