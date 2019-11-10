<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function home(){
    		$data=[
		'P.H Amin Academy',
		'JCPSC',
		'AIUB',
		'FSL',
		'ENOSIS'
	];
    return view('welcome')->withData($data);
    }
}
