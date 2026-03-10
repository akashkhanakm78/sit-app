<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    //
    public function formSubmit(Request $request){

        $request->validate([
            'name'=>'required|min:4',
            'age'=>'required|min:2',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:8',
            
        ],[
            'name.required'=>'Name is required',
            'name.min'=>'Name is too short',
            'age.required'=>'Age is required',
            'age.min'=>'Age is too short',
            'email.required'=>'Email is required',
            'email.email'=>'Email is invalid',
            'password.required'=>'Password is required',
            'password.confirmed'=>'Password is not matching',
            'password.min'=>'Password is too short',
        ]);
        
        $name = $request->name;
        $age = $request->age;
        $email = $request->email;
     

        return view("home",['name'=>$name,'age'=>$age,'email'=>$email]);
    }
}
