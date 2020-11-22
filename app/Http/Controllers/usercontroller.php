<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class usercontroller extends Controller
{
    //
    
    function index(Request $req)
    {
        return Http::get("https://reqres.in/api/users?page=1");
    }
}