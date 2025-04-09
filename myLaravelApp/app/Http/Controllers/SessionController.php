<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function login(Request $request){
        $request->session()->put('user',$request->input('username'));
        // echo "Logged In";
        return view('bleh2');

    }
    public function logout(){
    session()->pull('user');
    return view('bleh2');
    }
}
