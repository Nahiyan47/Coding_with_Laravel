<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use SoftDeletes;

    public function code(){
    	return $this->hasone('App\Flightcode');
    }

    public function seats(){
    	return $this->hasmany('App\Seat');
    }
}
