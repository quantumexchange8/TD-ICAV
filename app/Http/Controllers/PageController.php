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

    public function products1()
    {
    return view('products1');
    }

    public function products2()
    {
    return view('products2');
    }
    public function products3()
    {
    return view('products3');
    }
    public function products4()
    {
    return view('products4');
    }
    public function products5()
    {
    return view('products5');
    }
    public function products6()
    {
    return view('products6');
    }
}

