<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
    	return view('form');
    }

    //buat nama dilink langsung
    public function Welcome($firstname, $lastname){
    	return view('welcomes', ["firstname" => $firstname, "lastname" => $lastname]);
    }

    //buat nama diform register
    public function Welcome_post(Request $request){
        $firstname = $request["firstname"];
        $lastname = $request["lastname"];
    	return view('welcomes', ["firstname" => $request["firstname"], "lastname" => $request["lastname"]]);
    }
}
