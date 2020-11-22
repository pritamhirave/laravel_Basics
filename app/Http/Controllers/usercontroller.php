<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class usercontroller extends Controller
{
    //
    
    function index(Request $req)
    {
        $collection=Http::get("https://reqres.in/api/users?page=1");
        return view("users",['collection'=>$collection['data']]);
    }
} 