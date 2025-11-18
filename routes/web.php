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

Route::get('/book-session', function () {
    return view('home.book-session');
});

Route::get('/book-appointment', function () {
    return view('home.book-appointment');
});

Route::get('/speak-management', function () {
    return view('home.speak-management');
});


Route::get('/registration', function () {
    return view('home.registration');
});


Route::get('/about', function () {
    return view('home.about');
});

Route::get('/gallery', function () {
    return view('home.gallery');
});

Route::get('/rentals', function () {
    return view('home.rentals');
});

Route::get('/academy', function () {
    return view('home.academy');
});

Route::get('/services', function () {
    return view('home.services');
});
