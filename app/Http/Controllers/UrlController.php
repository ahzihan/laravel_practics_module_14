<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function UrlDataReceive(Request $request):string{
        $name=$request->name;
        $age=$request->age;
        return "My Name is ${name} and I am ${age} years old";
    }
}
