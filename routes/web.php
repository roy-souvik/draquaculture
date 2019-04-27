<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'public.home'
]);

Route::get('/about-us', [
    'uses' => 'HomeController@aboutUs',
    'as' => 'public.aboutUs'
]);

Route::get('/contact-us', [
    'uses' => 'HomeController@contactUs',
    'as' => 'public.contactUs'
]);

Route::get('/products', [
    'uses' => 'ShopController@index',
    'as' => 'public.shop'
]);

// Route::get('/product-packages', [
//     'uses' => 'ShopController@packages',
//     'as' => 'public.productPackages'
// ]);

Route::get('/shop', [
    'uses' => 'ShopController@index',
    'as' => 'public.shop'
]);

// Route::get('/shop/product-details', [
//     'uses' => 'ShopController@productDetails',
//     'as' => 'public.shop.details'
// ]);
