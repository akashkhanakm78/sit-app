<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function upload(Request $req){

            // $req->validate([
            //         'image' => 'required||max:2048'
            //         ]);

                    

            // $path = $req->file('image')->store('images', 'public');

            // $url = asset('storage/' . $path);

    return response()->json(['url' => $req->file('image')]);


    }
}
