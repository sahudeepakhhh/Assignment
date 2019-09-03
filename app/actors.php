<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actors extends Model
{
    public $timestamps = false;

    public function films(){
    	return $this->belongsToMany('App\films'); 
    }
}
