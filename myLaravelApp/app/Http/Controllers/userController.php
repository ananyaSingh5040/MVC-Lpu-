<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\Uppercase;

class userController extends Controller
{
    //
    public function userdata(Request $request){
        // echo $request->username . " and " . $request->password; 
        // echo "Data Submitted Succesfully";
    //    $name= $request->username ;
    //     $password= $request->password ;
    //     return view('Friday',compact('name','password'));
    $request->validate([ //For validation
        // 'username'=>'required | min:3 | max:20 | Uppercase',
        'username'=>'required | min:3 | max:20',
        'password'=>'required',
    ],[
        //CUSTOMIZED ERROR MESSAGES
        'username.required'=>"Cannot be empty!",
        'username.min'=>"Minuimum length should be 3!",
    ]); 
    // One array for validation and second for customized error messages!
    return "data entered succesfully";
    }
}
