<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visibility extends Model
{
    //
    public function projects(){
    	return $this->hasMany('App\projects','visibility','id');
    }

    publlic function files(){
    	return $this->hasMany('App\file','visibility','id');
    }
}
