<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.pages.shop.index');
    }

    public function productDetails()
    {
        return view('frontend.pages.shop.product-details');
    }

}
