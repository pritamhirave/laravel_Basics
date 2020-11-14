<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    
    function index(Request $req)
    {
        return $req->input();
    }
}