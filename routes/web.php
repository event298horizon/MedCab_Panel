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
});
// landing page end

// pathology
Route::get('/pathology', function () {
    return view('pathology');
});
// pathology end

// doctors
Route::get('/doctors', function() {
    return view('doctors');
});
// doctors end

// ambulances
Route::get('/ambulances', function() {
    return view('ambulances');
});
// ambulances end

// recommend
Route::get('/recommend', function() {
    return view('recommend');
});
// recommend end

// login
Route::get('/login', function() {
    return view('login');
});

// register
Route::get('/register', function() {
    return view('register');
});