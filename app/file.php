<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    //
    public function uploadedBy(){
    	return $this->belongsTo('App\user','uploadedBy','id');
    }

    public function project(){
    	return $this->belongsTo('App\project','project','id');
    }

    public function visibility(){
    	return $this->belongsTo('App\visibility','visibility','id');
    }
}
