<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return "Hi this is the home page";
});
Route::get('/about', function(){
    $myname = "sara";
    $myage = 23;
    return view('about')->with('name',$myname,)->with('age',$myage);
});
Route::get('/services/{name}', function($name){
    return view('services')->with('name',$name,);
});
