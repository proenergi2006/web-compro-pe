<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('company.pages.home');
});
Route::get('/about', function () {
    return view('company.pages.about');
});
Route::get('/product', function () {
    return view('company.pages.product');
});
Route::get('/services', function () {
    return view('company.pages.services');
});
Route::get('/networks', function () {
    return view('company.pages.networks');
});
Route::get('/articles', function () {
    return view('company.pages.articles');
});
Route::get('/contact', function () {
    return view('company.pages.contact');
});


// Route::get('/test', function () {
//     return view('company.pages.test');
// });
