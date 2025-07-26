<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\pages;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/worker_registration', [App\Http\Controllers\HomeController::class, 'worker_registration'])->name('worker');

Route::post('/save_register', [App\Http\Controllers\HomeController::class, 'save_register'])->name('save_register');


Route::get('/about', [pages::class, 'about'])->name('about');
Route::get('/services', [pages::class, 'services'])->name('services');
Route::get('/contact', [pages::class, 'contact'])->name('about');



Route::get('/domestic', [HomeController::class, 'domestic'])->name('services.domestic');
Route::get('/plumber', [HomeController::class, 'plumber'])->name('services.plumber');
Route::get('/children_care', [HomeController::class, 'children_care'])->name('services.children_care');
Route::get('/patient_care', [HomeController::class, 'patient_care'])->name('services.patient_care');
Route::get('/gardener', [HomeController::class, 'gardener'])->name('services.gardener');
Route::get('/painter', [HomeController::class, 'painter'])->name('services.painter');
Route::get('/electrician', [HomeController::class, 'electrician'])->name('services.electrician');

Route::get('/service_detail', [HomeController::class, 'service_detail'])->name('service.detail');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::post('bookingsave', [HomeController::class, 'bookingsave'])->name('bookingsave');
Route::get('payment', [HomeController::class, 'payment'])->name('payment');



//Route::view('/login','auth.login')->name('login');
//Route::get('/register',[HomeController::class,'register'])->name('register');



// user route
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
//Route::get('/domestic', [HomeController::class, 'domestic'])->name('services.domestic');

});
// admin route
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
//Route::get('/domestic', [HomeController::class, 'domestic'])->name('services.domestic');

});
// super admin route
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
    Route::get('/super-admin/dashboard', [HomeController::class, 'superadminDashboard'])->name('superadmin.dashboard');

});
