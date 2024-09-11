<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [PageController::class, 'index'])->name('index');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about-details', [PageController::class, 'aboutdetails'])->name('about-details');

Route::get('/products', [PageController::class, 'products'])->name('products');

Route::get('/departments', [PageController::class, 'departments'])->name('departments');
