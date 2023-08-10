<?php

namespace App\Http\Controllers;

use App\Models\Connect;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
public function index()

{
$contactus=Connect::all();
return view('Front-End.index',compact('contactus'));

}

}
