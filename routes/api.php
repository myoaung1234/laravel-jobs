<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/jobs', [JobPostAPIController::class, 'index']);
Route::post('/jobs', [JobPostAPIController::class, 'store']);
Route::get('/jobs/{id}', [JobPostAPIController::class, 'show']);
Route::put('/jobs/{id}', [JobPostAPIController::class, 'update']);
Route::delete('/jobs/{id}', [JobPostAPIController::class, 'destroy']);


