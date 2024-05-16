<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

// route group admni
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('role:superadmin');
    Route::get('/ui', function () {
        return view('admin.ui');
    })->name('admin.ui');
    Route::get('/icons', function () {
        return view('admin.icons');
    })->name('admin.icons');
    Route::get("/form",function () {
        return view('admin.forms');
    })->name('admin.form');
    Route::get('/table', function () {
        return view('admin.table');
    })->name('admin.table');
    Route::get('/chart', function () {
        return view('admin.chart');
    })->name('admin.chart');
   
    Route::get('/charts', function () {
        return view('admin.chart');
    })->name('admin.chart');
   
    
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('login.store');
Route::get('/create-account', [AuthController::class, 'createAccount'])->name('create.account');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
