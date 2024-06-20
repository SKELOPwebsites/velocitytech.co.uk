<?php

use App\Http\Controllers\ContactController;
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
Route::get('/mot', function () {
    return Inertia::render('MOT');
});
Route::get('/servicing', function () {
    return Inertia::render('Servicing');
});
Route::get('/brakes', function () {
    return Inertia::render('Brakes');
});
Route::get('/clutches', function () {
    return Inertia::render('Clutches');
});
Route::get('/tyres', function () {
    return Inertia::render('Tyres');
});
Route::get('/batteries', function () {
    return Inertia::render('Batteries');
});
Route::get('/wheel-alignment', function () {
    return Inertia::render('WheelAlignment');
});
Route::get('/exhausts', function () {
    return Inertia::render('Exhausts');
});
Route::get('/engine-diagnostics-scan', function () {
    return Inertia::render('EngineDiagnostics');
});
Route::get('/recovery', function () {
    return Inertia::render('Recovery');
});

Route::get('/about-us', function () {
    return Inertia::render('AboutUs');
});
Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'success' => session()->get('success')
    ]);
});
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/privacy', function () {
    return Inertia::render('Privacy');
});
