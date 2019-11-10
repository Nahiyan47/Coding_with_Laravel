<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use \App\Flight;
use \App\Flightcode;
use \App\Seat;
use \App\Customer;
use DB; 

class flightController extends Controller
{
    public function index(){
    	$data = Flight::orderBy('id','desc')->get();
    	return view('flight.flightinfo',compact('data'));

    	// $data = Flight::findorFail(2);

    	// $data = Flight::where('id',80)->count();
    	// print_r($data);
    	// exit;
    }

     public function store(Request $request){
        // Validate the request...

        $flight = new Flight;

        $flight->from = $request->from;
        $flight->to = $request->to;

        $flight->save();
        return redirect('/flight');
    }

    public function create(Request $request){
    	$flight = new Flight;
    	Flight::withTrashed()->find(1)->restore();
    	return view('flight.create');
    }

    public function destroy($id){

      $flight = Flight::find($id);
      $flight->delete();

      return redirect('/flight');
    }

    public function show($id){
    	 $flight = Flight::find($id)->code->code;
    	 return $flight;
    }

    public function showSeat($id){
    	$data['seat'] = Flight::find($id)->seats;
    	$data['flight'] = Flight::find($id);
        
    	
    	return view('flight.seats')->with($data);
    }

    public function details($id){
    	$data['detail'] = Customer::find($id)->flightDetail;
    	print_r($data['detail']);
    	exit;
    }

}
