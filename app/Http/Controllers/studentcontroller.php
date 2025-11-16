<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    //
     protected $myname = "sara";
    public function __construct(){
      $this->myname= strtoupper("sara");
    }
    public function contact(){
        return $this->myname;
    }
    public function index($name,$id){
        return view("news",compact('id','name'));
    }
    public function call(){
        return "<h1>" .  "this is contact us page from the student controller". "</h1>";
    }
    public function publicfunction(){
        return strtoupper("Hi Sara How are you?");
    }
}
