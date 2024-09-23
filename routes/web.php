<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/private-financial-services', function () {
    return view('private-financial-services');
});

Route::get('/wealth-management-services', function () {
    return view('wealth-management-services');
});

Route::get('/financial-markets-research', function () {
    return view('financial-markets-research');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about-details', function () {
    return view('about-details');
});

Route::get('/approach', function () {
    return view('approach');
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

Route::get('/departments', function () {
    return view('departments');
});

Route::get('/academic', function () {
    return view('academic');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/portfolios', function () {
    return view('portfolios');
});

Route::get('/featured', function () {
    return view('featured');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('mail',[PageController::class, 'mail_send']);