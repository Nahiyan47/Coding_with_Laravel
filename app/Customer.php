<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = ['customer_name','phone'];

	public function tasks(){
		return $this->hasmany(Task::class);

	}

    public function flightDetail(){
    	return $this->hasOneThrough('App\Flight', 'App\Seat');
    }
}

