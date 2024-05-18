<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MasterCategoryProject;
use App\Http\Controllers\MasterJabatanMember;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// route fe
Route::get('/',[FeController::class,'index'])->name('frontend.index');
Route::get('/project',[FeController::class,'project'])->name('frontend.project');
Route::get('/project/{id}',[FeController::class,'detailProject'])->name('frontend.detail.project');

Route::get('/member',[FeController::class,'member'])->name('frontend.member');
// route auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/create-account', [AuthController::class, 'createAccount'])->name('create.account');

// route group admnin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard')->middleware('role:admin');    
    Route::resource('/category', MasterCategoryProject::class)->middleware('role:admin');
    Route::resource('/jabatan', MasterJabatanMember::class)->middleware('role:admin');
    Route::resource('/member',MemberController::class)->middleware('role:admin');
    Route::resource('/project',ProjectController::class)->middleware('role:admin');
    Route::delete('/image/{id}/delete', [ProjectController::class, 'destroyImage'])->name('image.destroy');

});    

// route group template
Route::group(['prefix' => 'template'], function () {
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
