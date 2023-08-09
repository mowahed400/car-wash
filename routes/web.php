<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

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
    return view('Front-End.index');
});

Route::get('/loc', function () {
//    $clientIP = request()->ip();
//
//    $data = Location::get($clientIP);
//    dd($clientIP);

//    $ip = '127.0.0.1'; //For static IP address get
    $ip = '127.0.0.1'; //Dynamic IP address get
    $data = Location::get($ip);
dd($data);

});
