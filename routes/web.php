<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/package', function () {
    return view('packages');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog', [ PostController ::class,'index']);

Route::get('/contact', function () {
    return view('contact');
});