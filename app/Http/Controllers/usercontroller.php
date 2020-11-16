<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    
    function index(Request $req)
    {
        {
            $req->validate([
                'username'=>'required'
            ]);
        }
        return $req->input();
    }
}