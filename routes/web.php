<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WashingPointController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/', [WelcomeController::class,'index']);
Route::resource('message', MessageController::class);
Route::resource('feedback',ReviewController::class);



Route::group(['middleware' => ['auth']], function () {

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('mess', MessageController::class);
        Route::resource('feed', ReviewController::class);
        Route::resource('connect', ConnectController::class);
        Route::resource('points', WashingPointController::class);
    }
);
