<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function studentList(){
        $students=[["id"=>1,"name"=>"Ram","sec"=>"K22RS","roll"=>4],
        ["id"=>2,"name"=>"Shyam","sec"=>"K22RS","roll"=>6],
        ["id"=>3,"name"=>"Priya","sec"=>"K22RS","roll"=>8],
        ["id"=>4,"name"=>"Riya","sec"=>"K22RS","roll"=>12]
    ];
        return view('studentView',compact('students'));

}
public function table($num){
    return view('Table',compact('num'));

}
}