<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flightcode extends Model
{
    public function flight(){
    	return $this->belongsto('App\Flight');
    }
}
