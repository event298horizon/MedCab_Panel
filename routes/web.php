<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing page
Route::get('/', function () {
    return view('home');
})->name('home');
// landing page end

// pathology
Route::get('/pathology', function () {
    return view('pathology');
})->name('pathology');
// pathology end

// doctors
Route::get('/doctors', function() {
    return view('doctors');
})->name('doctors');
// doctors end

// ambulances
Route::get('/ambulances', function() {
    return view('ambulances');
})->name('ambulances');
// ambulances end

// recommend
Route::get('/recommend', function() {
    return view('recommend');
})->name('recommend');
// recommend end

// login
Route::get('/login', function() {
    return view('login');
})->name('login');
// login end

// register
Route::get('/register', function() {
    return view('register');
})->name('register');
// register end

// facilities
Route::get('/facilities', function() {
    return view('facilities');
})->name('facilities');
// facilities end

// hospital details
Route::get('/hospital_details', function() {
    return view('hospital_details');
})->name('hospital_details');
// hospital details

// settings
Route::get('/settings', function() {
    return view('settings');
})->name('settings');
// settings end
