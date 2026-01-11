<?php

namespace App\Http\Controllers; // THIS LINE IS CRITICAL

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home'); // make sure this Blade exists
    }
}
