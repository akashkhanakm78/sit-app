<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function formSubmit(Request $request){

        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
     

        return view("home",['name'=>$name,'age'=>$age,'email'=>$email]);
    }
}
