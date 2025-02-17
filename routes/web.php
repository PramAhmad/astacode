<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MasterCategoryProject;
use App\Http\Controllers\MasterJabatanMember;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TechnologyController;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// route fe
Route::get('/',[FeController::class,'index'])->name('frontend.index');
Route::get('/project',[FeController::class,'project'])->name('frontend.project');
Route::get('/project/{id}',[FeController::class,'detailProject'])->name('frontend.detail.project');
Route::get('/project/category/{cid}', [FeController::class, 'categoryProject'])->name('frontend.category.project');
Route::get('/member',[FeController::class,'member'])->name('frontend.member');
Route::get("/member/{id}",[FeController::class,'detailMember'])->name('frontend.detail.member');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
 
Route::group(['prefix'=> 'astacode2020'],function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'storeLogin'])->name('login.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// route group admnin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('admin.dashboard')->middleware('role:admin');  
    Route::resource('/category', MasterCategoryProject::class)->middleware('role:admin');
    Route::resource('/jabatan', MasterJabatanMember::class)->middleware('role:admin');
    Route::resource('/member',MemberController::class)->middleware('role:admin');
    Route::resource('/project',ProjectController::class)->middleware('role:admin');
    Route::get('/project/loadmore',[ProjectController::class,'loadMore'])->name('project.loadmore');
    Route::resource('/service',ServiceController::class)->middleware('role:admin');
    Route::resource('/tech',TechnologyController::class)->middleware('role:admin');
    Route::delete('/image/{id}/delete', [ProjectController::class, 'destroyImage'])->name('image.destroy');
    // skill destroy
    Route::delete('/skill/{id}/delete', [MemberController::class, 'destroySkill'])->name('skill.destroy');
    // contact
    Route::get('/contact', [ContactController::class, 'contact'])->name('contact.index')->middleware('role:admin');

});    

Route::get("clear",function(){
    // optimize
    Artisan::call('optimize:clear');
});
