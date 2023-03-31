<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/talent', function () {
    return view('talent');
});
Route::get('/skill', function () {
    return view('skill');
});
Route::get('/peserta', function () {
    return view('peserta');
});

/* Admin */
Route::get('/admin/dashboard', [AdminHomeController::class, 'index'])->name('admin_dashboard');

/* Admin Login */
Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
Route::post('/login/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');



