<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/mobile-tyre-fitting', function () {
    return Inertia::render('MobileTyreFitting');
});
Route::get('/tyres', function () {
    return Inertia::render('Tyres');
});
Route::get('/mot', function () {
    return Inertia::render('MOT');
});
Route::get('/servicing', function () {
    return Inertia::render('Servicing');
});
Route::get('/brakes', function () {
    return Inertia::render('Brakes');
});
Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});
