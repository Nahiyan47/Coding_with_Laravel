<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicDependent extends Controller
{
    function index(){ 
    	$country_list = DB::table('country_state_city')
         ->groupBy('country')
         ->get();
    	return view('dynamic_dependent')->with('country_list', $country_list);
    }

     function fetch(Request $request)
    {
     $country = $request->get('country');
  
     $data = DB::table('country_state_city')
       ->where('country', $country)
       ->groupBy('state')
       ->get();


      echo '<option value="">===Select state===</option>';
        foreach ($data as $value) {
         echo '<option value="'.$value->state.'" >'.$value->state.'</option>';
         }
    }

         function fetchstate(Request $request)
    {
     $state = $request->get('state');
  
     $data = DB::table('country_state_city')
       ->where('state', $state)
       ->groupBy('city')
       ->get();


      echo '<option value="">===Select city===</option>';
        foreach ($data as $value) {
         echo '<option value="'.$value->city.'" >'.$value->city.'</option>';
         }
    }
}
