<?php

namespace App\Http\Controllers;
use App\Models\Classes;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function createClass(Request $req){

            $result = Classes::create([
                'name'=>$req->name,
                'email'=>$req->email,
                'dpt'=>$req->dpt,
                'age'=>$req->age,
                'roll'=>$req->roll,
                'phone'=>$req->phone
            ]);

            return redirect('/classes');

    }

    public function getClasses(){

        $classes = Classes::all();
        

    return view('createclassesform', ["classes"=>$classes]);

    }

    public function deleteClass($id){

            Classes::where('id',$id )->delete();

            return redirect()->back()->with('success','Data Deleted');
    }

}
