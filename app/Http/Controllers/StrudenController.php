<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StrudenController extends Controller
{
    //
    public function createStudent(Request $req){


        $student = new Student();
        $student->name = $req->name;
        $student->email = $req->email;
        $student->save();

        return $student;
    }

    public function getStudents(){

        $students = Student::findOrFail(10);
        return $students;
    }

}
