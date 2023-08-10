<?php

namespace App\Http\Controllers;

use App\Models\Connect;
use App\Models\GoodReview;
use Illuminate\Http\Request;

class WelcomeController extends Controller{
    public function index(){

    $contactus=Connect::all();
    $reviews=GoodReview::all();
    return view('Front-End.index',compact('contactus','reviews'));




    }

}
