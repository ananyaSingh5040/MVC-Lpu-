<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = "Khushi";
    $class = "K22RS";
    $rollNo = 18;
    return view('Bleh', ['n' => $name, 'class' => $class, 'rNo' => $rollNo]);
    // Associative Array. (key: value pair)
});
// Route::get('/hello', function () {
//     $name= "Ananya";
//     $class="K22RS";
//     $rollNo=05;
//     return view('Home')->with('n',$name)->with('class','K22RS')->with('rNo',$rollNo);
//     // With method is also known as chaining method. (Key: value pair)
// });
Route::get('/about', function () {
    $name = "Aryan";
    $class = "K22LQ";
    $rollNo = 40;
    return view('About', compact('name', 'rollNo'));
});

Route::get('/home', function () {
    return view('Home');
});
// Route::get('/view', function () {
//     $name= "Namaste from plain PHP";
//     echo $name;
// });
Route::get('/raman', function () {
    $name = "Raman";
    $rollNo = 20;
    // $class = "K22RS";
    return view('About', compact('name', 'rollNo')); //Globally pass ho raha class in app/provider/AppService using View::share('key':'value');
});
Route::get('/aman', function () {
    $name = "Aman";
    $rollNo = 18;
    $class = "K22SQ";
    return view('About', compact('name', 'rollNo', 'class'));
});
Route::get('/shyam', function () {
    $name = "Shyam";
    $rollNo = 28;
    // $class = "K22RS";
    return view('About', compact('name', 'rollNo'));
});
//Routes with dynamic parameters:


Route::get('/user/{name}', function ($name) {
    if (!ctype_digit($name)) { //only allows integers (inbuilt function)
        return "Only integers are excepted";
    }
    return "Welcome " . $name;
});
Route::get('/user1/{name}', function ($name) {
    return "Welcome " . $name;
})->where('name', '[A-Za-z]+'); //only allows Alphabets (regular expressions)

Route::get('/about1/{id}', function ($id) {
    return "Welcome " . $id;
}); //globally id ka constraint develop kiya hai in appserviceprovider <3.

//Optional parameter (default value)
Route::get('/optional/{name?}', function ($name = "Guest") {
    return "Welcome " . $name;
});

// Multiple parameters:
Route::get('/multiple/{name}/{id}', function ($name, $id) {
    return "Hello " . $name . "<br>Your Id: " . $id;
});

//JSON Format:
Route::get('/json/{name}/{id}/{rollNo}', function ($name, $id, $rollNo) {
    return response()->json([
        'name' => $name,
        'id' => $id,
        'rollNo' => $rollNo,
    ]);
});


