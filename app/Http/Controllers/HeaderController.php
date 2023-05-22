<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function HeaderDataReceive(Request $request){
        $name=$request->header('name');
        $age=$request->header('age');
        return "My Name is ${name} and I am ${age} years old";

        // return $request->header();
    }
}
