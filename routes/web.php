<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ConnectController;
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

Auth::routes();

Route::get('/', function () {
    return view('Front-End.index');
});

Route::group(['middleware' => ['auth']], function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('mess', MessageController::class);
        Route::resource('connect', ConnectController::class);
    }
);
