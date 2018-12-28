<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index');
    }

    public function aboutUs()
    {
        return view('frontend.pages.about.index');
    }

}
