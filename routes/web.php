<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/users', function() {
    return view('users');
});
*/

Route::get("users",[usercontroller::class,'index']);
Route::view("login","users");

/*
Route::get('/user/{name}', function ($name) {
    return view('user',["user"=>$name]);
});
*/
//Route::get("user/{id}",[UserController::class,'show']);
//Route::get("user",'usercontroller@show');