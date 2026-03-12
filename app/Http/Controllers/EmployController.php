<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class EmployController extends Controller
{
    //

    public function createEmpley(){

        $employ = new Test();
        $employ->name = "Test 2";
        $employ->email = "test@test.com";
        $employ->dept = "Test";
        $employ->save();

        return $employ;

    }
}
