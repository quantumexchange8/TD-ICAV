<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/about-details', function () {
    return view('about-details');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/portfolios', function () {
    return view('portfolios');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/career', function () {
    return view('career');
});