<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Customer;

class projectTaskcontroller extends Controller
{
    public function update(Task $task){

    	$task->update([
    		'completed' => request()->has('completed')

    	]);

    	return back();
    }

    public function store(Customer $user){
    	Task::create([
    		'customer_id' => $user->id,
    		'description'=>request('description'),

    	]);

    	return back();

    }
}
