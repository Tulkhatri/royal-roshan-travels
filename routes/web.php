<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    sleep(1);
    return Inertia::render('Home');
})->name('home');
// Route::inertia('/about', 'About')->name('about');
// Route::inertia('/gallery', 'Gallery')->name('gallery');
// // Route::inertia('/contactus', 'ContactUs')->name('contactus');
