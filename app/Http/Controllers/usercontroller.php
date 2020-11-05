<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    function viewLoad()
    {
        return view(users);
    }
}