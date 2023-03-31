<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/login', function () {
//     return view('login');
// });
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
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





