<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// route group admni
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
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
});