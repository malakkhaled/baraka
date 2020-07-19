<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarakaARController extends Controller
{
    public function index()
    {
        return view('barakaAR/home');
    }
 
    public function product()
    { 
        return view('barakaAR/product');
    }
    public function news()
    { 
        return view('barakaAR/news');
    }
 

}
