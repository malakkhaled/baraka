<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarakaENController extends Controller
{
 
    public function index()
    {
        return view('barakaEN/home');
    }
 
    public function product()
    { 
        return view('barakaEN/product');
    }
    public function news()
    { 
        return view('barakaEN/news');
    }
}
