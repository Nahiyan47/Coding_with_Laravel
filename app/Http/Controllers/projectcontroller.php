<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;
class projectcontroller extends Controller
{
    public function index(){ 
    	$data= Customer::all();
    	return view('user/userinfo',compact('data'));
    }

    public function create(){

    	return view('user.create');
    }

    public function store(Customer $user){
        request()->validate([

            'name' => 'required',
            'phone' => 'required'
 
        ]);


    	$user->customer_name=request('name');
    	$user->phone=request('phone');

    	$user->save();

    	return redirect('/user');
    }

    public function edit(Customer $user){
    
        return view('user.edit',compact('user'));
    }

    public function show($id){
        $user = Customer::findorFail($id);
        return view('user.show',compact('user'));
    }

    public function update($id){
       $user = Customer::find($id);
       $user->customer_name=request('name');
       $user->phone=request('phone');

       $user->save();

       return redirect('/user');
    }

    public function destroy($id){
      $user = Customer::find($id);
      $user->delete();

      return redirect('/user');
    }
}
