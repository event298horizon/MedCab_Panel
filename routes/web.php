<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hospital_controller;
use App\Http\Controllers\LabController;
use App\Http\Controllers\PathologyAuthController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\PathologyController;
use App\Http\Middleware\userAuthMiddleware;
use App\Http\Middleware\CheckAuthUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Define your web routes here. Make sure to organize them properly.
|
*/

// Default route - Home/Index Page
Route::get('/', function () {
    return view('login');
})->name('login');

// Authenticated users
Route::middleware([userAuthMiddleware::class])->group(function () {
    Route::controller(PathologyController ::class)->group(function () {
        Route::get('/pathology_dashboard', 'pathologyDashboard')->name('pathology_dashboard');

        });

    Route::controller(LabController ::class)->group(function () {
        Route::get('/add_lab', 'add_lab')->name('add_lab');
        Route::post('/lab_store', 'Save_lab')->name('lab.store');
        Route::get('/add_basic_details', 'LabBasicDeatails')->name('add_basic_details');
        Route::post('/lab_basic_store', 'Save_basic_details')->name('lab.basic_store');
        Route::get('/add_bank_details', 'LabBankDeatails')->name('add_bank_details');
        Route::post('/lab_bank_store', 'savelabBankData')->name('lab.bank_store');
        Route::get('/lab_dashboard', 'LabDashboard')->name('lab_dashboard');
        Route::get('/edit_lab/{lab_id}', 'EditLabPage')->name('lab.edit_lab');
        Route::post('/lab/verify', 'verifyLab')->name('verify.lab');
        });


});

// Pathology
Route::get('/pathology', function () {
    return view('pathology');
})->name('pathology');

// Doctors
Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

// Ambulances
Route::get('/ambulances', function () {
    return view('ambulances');
})->name('ambulances');

// Recommend
Route::get('/recommend', function () {
    return view('recommend');
})->name('recommend');

// Facilities
Route::get('/facilities', [hospital_controller::class, 'hospital_services'])->name('facilities');

// facilities
Route::get('/facilities',[hospital_controller::class,'hospital_services'])->name('facilities');
// facilities end

// hospital details
Route::get('/hospital_details',[hospital_controller::class,'hospital_list'])->name('hospital_details');
// hospital details

// Settings
Route::get('/settings', function () {
    return view('settings');
})->name('settings');

// Pathology Tests
Route::get('/pathology/tests', function () {
    return view('pathology-tests');
})->name('pathology-tests');

// Temporary Pop-up Form Check
Route::get('/form', function () {
    return view('popup_form');
})->name('popup_form');

// Hospital Onboarding
Route::get('/hospital_onboard', function () {
    return view('hospital_registration');
})->name('hospital_registration');


// User Login and Registration Routes
Route::middleware([CheckAuthUser::class])->group(function () {
    Route::get('/register', function () {
        return view('register');
    })->name('register');

    Route::get('/user_login', function () {
        return view('login');
    })->name('user_login');

    Route::controller(PathologyAuthController ::class)->group(function () {
        Route::post('/user_login', 'userLogin')->name('login.store');
        Route::get('/user_search', 'autocomplete')->name('auto.complete');
        Route::get('/user_otps', 'otp_pages')->name('otp_pages');
        Route::post('/resend_otp', 'ResendOtp')->name('resend_otp');
        Route::post('/register', 'registerstore')->name('register.store');
        Route::get('/pathology_logout', 'logout')->name('pathology-logout');
        Route::post('/user_otp', 'UserOtp')->name('get_otp');

    });
  

});

Route::withoutMiddleware([userAuthMiddleware::class])->group(function () {
    // Define routes accessible without authentication middleware here
});

