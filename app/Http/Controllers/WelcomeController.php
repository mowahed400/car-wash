<?php

namespace App\Http\Controllers;

use App\Models\Connect;
use App\Models\GoodReview;
use App\Models\WashingPoint;
use Illuminate\Http\Request;

class WelcomeController extends Controller{
    public function index(){
    $contactus=Connect::all();
    $reviews=GoodReview::all();
    $points=WashingPoint::all();
    return view('Front-End.index',compact('contactus','reviews','points'));
    }

}
