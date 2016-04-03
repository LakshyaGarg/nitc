<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    //
    public function users(){
    	return $this->hasMany('App\user','type','id');
    }
}
