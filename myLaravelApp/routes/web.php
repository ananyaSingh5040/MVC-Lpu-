<?php

use App\Http\Controllers\fileForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentController1;
use App\Http\Controllers\userController;



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


//A route having a controller
Route::get('/controller', [FirstController::class, 'show']);
Route::get('/controller', [FirstController::class, 'show1']); //Sabse latest wala call hoga!
Route::get('/studentdetail', [StudentController::class, 'studentList']);
Route::get('/table/{num}', [StudentController::class, 'table']);

Route::get('/homePage', function () {
    return view('HomePageHeader');
});

Route::get('/header', function () {
    return view('Common.Header');
});
// Named Route
Route::get('hello/namedroute/example', function () {
    return view('Home');
})->name('hm');
Route::get('hm', function () {
    return view('Home');
});
Route::View('honest', 'First');

//You need to import controller in order to use it.
//GROUP ROUTING / PREFIX ROUTING:
Route::prefix('Student/2025/Btech/CSE')->controller(StudentController1::class)->group(function () {

    Route::get('attendance', 'Attendance');
    Route::get('exam', 'Examination');
    Route::get('details', 'Details');
    Route::get('fees', 'Fees');
});
// Route::get('Student/2025/Btech/CSE/attendance',[StudentController1::class,'Attendance']);
// Route::get('Student/2025/Btech/CSE/exam',[StudentController1::class,'Examination']);
// Route::get('Student/2025/Btech/CSE/details',[StudentController1::class,'Details']);
// Route::get('Student/2025/Btech/CSE/fees',[StudentController1::class,'Fees']);

// Redirects you to route honest if you try to access abc route. 
Route::redirect('abc', 'honest');
Route::get('/beh', [StudentController1::class, 'Redirection']);
Route::get('info', [StudentController1::class, 'About']);

Route::get('/post/{id}',function($id){
    $title= "Blog " .$id;
    return view('bleh1',compact('title', 'id'));
});

//Group Routing:
// Route::prefix('page')->group(function(){
//     Route::get('/about',function()
//     {
//         return view('Home');
//     });

// });

//2d array 
Route::get('/post/users',function(){
    $name = [
        1=>['name'=>'kishore','phone'=>'5678'],
        2=>['name'=>'ananya','phone'=>'788908'],
        3=>['name'=>'krunali','phone'=>'76892'],
        4=>['name'=>'jagruta','phone'=>'376821'],

    ];
    return view('user',['user'=>$name, 'city'=>"Delhi"]);
});


//CA-1
Route::get('/products', [ProductController::class, 'Product'])
->name('product');
Route::prefix('/products')->group(function () {

    Route::View('1', 'Led');
    Route::View('2', 'ExtensionCord');
    Route::View('3', 'CeilingFan');
    Route::View('4', 'Kettle');
    Route::View('5', 'PowerBank');
});

Route::get('adduser',function(){
    return view('userForm');

});
Route::post('usercont',[userController::class,'userdata']);
Route::view('login','sessionForm');
use App\Http\Controllers\SessionController;
Route::post('login',[SessionController::class,'login']);
Route::view('logout','bleh2');
Route::view('/file','fileForm');
Route::post('upload',[fileForm::class,'upload']);