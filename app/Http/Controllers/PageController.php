<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    return view('index');
    }
    public function about()
    {
    return view('about');
    }

    public function aboutdetails()
    {
    return view('about-details');
    }

    public function products()
    {
    return view('products');
    }


    public function departments()
    {
    return view('departments');
    }
}

