<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function projectType(){
    	return $this->belongsTo('App\projecttype','pType','id');
    }

    public function projectVisibility(){
    	return $this->belongsTo('App\visibility','visibility','id');
    }

    public function projectSupervisor(){
    	return $this->belongsTo('App\user','superVisor','id');
    }

    public function projectStatus(){
    	return $this->belongsTo('App\status','status','id');
    }

    public function events(){
    	return $this->hasMany('App\event','project','id');
    }

    public function files(){
    	return $this->hasMany('App\file','project','id');
    }

    public function members(){
    	return $this->belongsToMany('App\user');
    }
}
