<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    public function userType(){
    	return $this->belongsTo('App\usertype','type','id');
    }

    public function supervisorOf(){
    	return $this->hasMany('App\project','superVisor','id');
    }

    public function events(){
    	return $this->hasMany('App\event','addedBy','id');
    }

    public function files(){
    		return $this->hasMany('App\file','uploadedBy','id');
    }

    public function projects(){
    	return $this->belongsToMany('App\project','pmembers','uid','pid');
    }
}
