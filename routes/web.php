<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/contact', function () {
    return view('home.contact');
});


Route::get('/artists', function () {
    return view('home.artists');
});
