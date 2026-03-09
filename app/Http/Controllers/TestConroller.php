<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestConroller extends Controller
{
    //
    public function test(){

        // echo "I'm from Controller";
        $name = "Ram Kumar";
        $age = 22;

          return view('welcome', ["name"=>$name, "age"=>$age]);
    }
}
