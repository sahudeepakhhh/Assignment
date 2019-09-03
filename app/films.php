<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class films extends Model
{
    public $timestamps = false;

    public function actors(){
    	return $this->belongsToMany('App\actors'); 
    }
}
