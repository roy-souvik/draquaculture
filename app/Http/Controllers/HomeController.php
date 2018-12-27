<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        dd('test');
        return view('frontend.pages.home.index');
    }
}
