<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileForm extends Controller
{
    //
   public function upload(Request $request){
    if($request->hasFile('file')){
    $path = $request->file('file')->store('uploads','public');
    // return "File uploaded succesfully"."<br>Path- ".$path;
    $fileArray = explode('/',$path);
    $fileName = $fileArray[1];
    // return $fileName;
    return view('display1',['path'=>$fileName]);
    
    }
    return "No file uploaded!";
    // return "File Uploaded Successfully!";
    //  php artisan storage:link
    }

}
