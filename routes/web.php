<?php

use App\Http\Controllers\AcademyApplicationController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ManagementRequestController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionBookingController;
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

Route::get('/news', function () {
    return view('home.news');
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




Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::post('/book-session', [SessionBookingController::class, 'store'])
    ->name('session.book');
Route::post('/speak-to-management', [ManagementRequestController::class, 'store'])
    ->name('management.store');

Route::post('/academy/apply', [AcademyApplicationController::class, 'store'])
    ->name('academy.apply');

    
Route::post('/register', [RegistrationController::class, 'store'])
    ->name('register.store');
