<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalsController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\BloodController;
use App\Http\Controllers\LabsController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\FirstAidController;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| LOGIN CHECK HELPER (NO MIDDLEWARE)
|--------------------------------------------------------------------------
*/
function requireLogin()
{
    if (!session()->has('user_id')) {
        redirect('/login')->send();
        exit;
    }
}

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| DASHBOARD (PROTECTED)
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    requireLogin();
    return view('dashboard');
});

/*
|--------------------------------------------------------------------------
| GLOBAL SEARCH
|--------------------------------------------------------------------------
*/
Route::get('/search', [SearchController::class, 'index'])
    ->name('search.index');

/*
|--------------------------------------------------------------------------
| HOSPITAL ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/hospital/{name}/doctors', [HospitalsController::class, 'doctors'])
    ->name('hospital.doctors');

Route::get('/hospital', function () {
    return view('hospitals');
})->name('hospital.ui');

Route::get('/hospitals', [HospitalsController::class, 'index'])
    ->name('hospitals.index');

Route::post('/hospitals/store', [HospitalsController::class, 'store'])
    ->name('hospitals.store');

Route::get('/hospitals/delete/{id}', [HospitalsController::class, 'delete'])
    ->name('hospitals.delete');

/*
|--------------------------------------------------------------------------
| DOCTOR ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/doctors', [DoctorsController::class, 'index'])
    ->name('doctors.index');

Route::get('/doctor/{id}', [DoctorsController::class, 'show'])
    ->name('doctor.show');

Route::post('/book-appointment', [DoctorsController::class, 'book'])
    ->name('doctor.book');

/*
|--------------------------------------------------------------------------
| OTHER SECTIONS
|--------------------------------------------------------------------------
*/
Route::get('/blood', [BloodController::class, 'index']);

Route::get('/blood/request/{id}', [BloodController::class, 'requestBlood'])
    ->name('blood.request');

Route::get('/labs', [LabsController::class, 'index']);

Route::get('/pharmacy', [PharmacyController::class, 'index']);

Route::get('/medicine-check', function () {
    return view('medicinecheck');
})->name('medicine.check');

Route::get('/firstaid', [FirstAidController::class, 'index']);

Route::get('/emergency', [EmergencyController::class, 'index']);

Route::post('/chatbot', [\App\Http\Controllers\ChatbotController::class, 'respond']);
