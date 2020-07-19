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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userprofile', 'UserController@index')->name('userprofile');

Route::resource("/newsdas","NewsController");

Route::resource("/productdas","ProductController");


/*pages AR*/
Route::get('/', 'barakaARController@index')->name('index');
Route::get('/product','barakaARController@product')->name('product');
Route::get('/news', 'barakaARController@news')->name('news');
Route::get('/contact', function () { return view('barakaAR/contact');})->name('contact');
Route::get('/about', function () { return view('barakaAR/about');})->name('about');


/*pages EN*/
Route::get('/indexen', 'barakaENController@index')->name('indexEN');
Route::get('/producten','barakaENController@product')->name('productEN');
Route::get('/newsen', 'barakaENController@news')->name('newsEN');
Route::get('/contacten', function () { return view('barakaEN/contact');})->name('contactEN');
Route::get('/abouten', function () { return view('barakaEN/about');})->name('aboutEN');