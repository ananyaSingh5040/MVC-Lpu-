<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FirstController;

class StudentController1 extends Controller
{
    //
    public function Attendance()
    {
        return view('Student.attendance');
    }
    public function Examination()
    {
        return view('Student.exam');
    }
    public function Details()
    {
        return view('Student.details');
    }
    public function Fees()
    {
        return view('Student.fees');
    }

    public function Redirection(){
        return redirect()->action([FirstController::class,'show1']);
    }
    public function About(Request $request){
        $Name = $request->name;
        $Age= $request->age;
        return view('Student.About',compact('Name','Age'));
    }
}
