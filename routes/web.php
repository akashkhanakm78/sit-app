<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestConroller;
use App\Http\Controllers\ArryController;    
use App\Http\Controllers\FormsController;    
use App\Http\Controllers\StrudenController;    


// Route::get('/', function () {

//     return view('welcome');
// });

Route::get('/', function () {

    return view('welcome');
});


Route::get('/home',function(){

    return view('home');
});
Route::get('/about',function(){

    return view('about');
});


Route::get('/controller', [TestConroller::class, 'test']);

Route::get('/welcome',[TestConroller::class,'test']);

Route::get('/array',[ArryController::class,"arry"]);


Route::get('/form',function(){

    return view('form');
});



Route::post("/submit",[FormsController::class,"formSubmit"]);


Route::view('/contact','contact');


Route::post('/create-studen', [StrudenController::class, 'createStudent']);

Route::get('/get-studen', [StrudenController::class, 'getStudents']);

Route::view('/student-form',"createstudent");
