<?php
use App\Http\Controllers\studentcontroller;

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
Route::view('/home/{name}', 'home');
Route::controller(studentcontroller::class)->group(function(){
    Route::get("news/{id}/{name}",'index');
    Route::get("contact",'call');
    
});
Route::get("private",[studentcontroller::class,'publicfunction']);
Route::get("contact1",[studentcontroller::class,'contact']);
Route::get('/services/{name}', function($name){
    return view('services')->with('name',$name,);

});
