<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/strategies', function () {
    return view('strategies');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/academic', function () {
    return view('academic');
});