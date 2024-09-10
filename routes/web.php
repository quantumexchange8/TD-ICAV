<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [PageController::class, 'index'])->name('index');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/about-details', [PageController::class, 'aboutdetails'])->name('about-details');

Route::get('/products', [PageController::class, 'products1'])->name('products1');

Route::get('/cryptocurrencies', [PageController::class, 'products2'])->name('products2');

Route::get('/equities', [PageController::class, 'products3'])->name('products3');

Route::get('/commodities', [PageController::class, 'products4'])->name('products4');

Route::get('/financial-planning', [PageController::class, 'products5'])->name('products5');

Route::get('/retirement-planning', [PageController::class, 'products6'])->name('products6');
