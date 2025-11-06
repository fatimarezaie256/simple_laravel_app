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
Route::view('/about','about');
Route::get('/services/{name}', function($name){
    return view('services')->with('name',$name,);

});
Route::view('/home/{name}', 'home');
