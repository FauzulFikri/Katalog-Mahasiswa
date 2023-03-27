<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\TalentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Tabel Mahasiswa */
Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}', [StudentController::class, 'show']);
Route::get('students/{id}/edit', [StudentController::class, 'edit']);
Route::put('students/{id}/edit', [StudentController::class, 'update']);
Route::delete('students/{id}/delete', [StudentController::class, 'destroy']);

/* Tabel Bakat */
Route::get('talents', [TalentController::class, 'index']);
Route::post('talents', [TalentController::class, 'store']);
Route::get('talents/{id}', [TalentController::class, 'show']);
Route::get('talents/{id}/edit', [TalentController::class, 'edit']);
Route::put('talents/{id}/edit', [TalentController::class, 'update']);
Route::delete('talents/{id}/delete', [TalentController::class, 'destroy']);