<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projecttype extends Model
{
    //
    public function projects(){
    	return $this->hasMany('App\project','pType','id');
    }

}
