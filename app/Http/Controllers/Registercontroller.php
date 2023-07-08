<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    public function index(){
        return view('index');
    }

        public function About(){
        return view('About');
    }
        public function Register(){
        return view('form');
    }
       public function welcome(){
        return view('welcome');
    }
    public function reg_data(Request $request){
    //   print_r ($request->all());
    $request-> validate([
        "name" => "required",
         "email" => "required",
          "pass" => "required"
    ]);
    print_r ($request->all());
    }
}
