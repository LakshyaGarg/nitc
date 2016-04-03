<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
   public function projects(){
    	return $this->hasMany('App\project','status','id');
    }
}
