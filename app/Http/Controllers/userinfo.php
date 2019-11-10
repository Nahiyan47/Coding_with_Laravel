<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class userinfo extends Controller
{
    public function index(){
    	$user = \App\User::all();

    	return $user;

    	return view('user/userinfo');
    }
}
