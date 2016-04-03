<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //
    public function users(){
    	return $this->belongsTo('App\user','addedBy','id');
    }

    public function projects(){
    	return this->belongsTo('App\project','project','id');
    }
}
