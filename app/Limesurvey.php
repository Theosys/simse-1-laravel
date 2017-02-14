<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limesurvey extends Model
{
    protected $table = 'lime_survey_8888';
    protected $primaryKey = 'token';
    
    public function encuestado()
    {        
        return $this->hasOne('App\Limetokens', 'token', 'token');
    }
}

	