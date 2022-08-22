<?php

// use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function(){
    return view('pages/home');
});

Route::get('about-us', function(){
    return view('pages.about');
});
