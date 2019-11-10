<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Validationcontroller extends Controller
{
    public function showform() {
       $result = DB::table('tasks')->where([['customer_id','=','1'],['completed','=','0']] )->get();
       print_r($result);
       exit;
   }

      public function validateform(Request $request) {
      print_r($request->all());
      $this->validate($request,[
         'username'=>'required|max:8',
         'password'=>'required'
      ]);
   }
}
