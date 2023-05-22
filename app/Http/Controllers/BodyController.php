<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function BodyDataReceive(Request $request){
        // $name=$request->input('name');
        // $age=$request->input('age');
        // $city=$request->input('city');
        // return "My Name is ${name} and I am ${age} years old. I live in ${city}.";
        return $request->input();


    }
}
