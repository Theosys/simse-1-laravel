<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Departamento extends Model
{
    protected $table = 'cntbc_departamento';
    protected $cast = ['v_coddep' => 'string'];
    protected $fillable =["v_coddep","v_desdep"];
    
    public static function all($columns = array())
    {
    	$query = DB::table("cntbc_departamento")->select($columns);
		$result =$query->addSelect(DB::raw("LPAD(v_coddep,2,'0') as v_coddep"))->get();
		return $result;
	}
    
}
