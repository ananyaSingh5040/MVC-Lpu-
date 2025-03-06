<?php

// COMMAND TO CREATE A CONTOLLER : php artisan make:controller <controllerName>

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function show(){
        return "Hello!";    
    }
    public function show1(){
        $name="Ananya";
        $rollNo= 19;
        $class="K22RS";
        return view('About',compact('name','rollNo','class'));    
    }
}
