<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArryController extends Controller
{
    //
    public function arry(){
        
        $students=["Ram","Sam","Jhon","Akash"];

        return view("arry", ["students"=>$students]);
    }
}
