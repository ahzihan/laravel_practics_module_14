<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllpathController extends Controller
{
    public function AllPathReceive(Request $request){
        $name=$request->name;
        $age=$request->age;
        $city=$request->input('city');
        $country=$request->input('country');
        $token=$request->header('token');

        return "My Name is ${name} and I am ${age} years old. I live in ${city}, ${country}.";


    }
}
