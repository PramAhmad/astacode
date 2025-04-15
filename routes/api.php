<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\JobApplicationController;
use App\Http\Controllers\API\JobController;
use App\Http\Controllers\API\ContactController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Job Application Routes
Route::post('/jobs/apply', [JobApplicationController::class, 'submit']);
Route::post('/jobs/application-status', [JobApplicationController::class, 'checkStatus']);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{id}', [JobController::class, 'show']);

// Contact Routes
Route::post('/contact', [ContactController::class, 'submit']);
