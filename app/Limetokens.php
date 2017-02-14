<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Limetokens extends Model
{
    protected $table = 'lime_tokens_8888';
    protected $primaryKey = 'tid';
    
    public function encuesta()
    {   
        return $this->belongsTo('App\Limetokens');
    }
}
