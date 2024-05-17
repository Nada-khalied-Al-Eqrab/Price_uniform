<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Symfony\Component\Routing\RouteCompiler;



//Route::get
//الدخول الاساسى
Route::get('/main-page', [MainPageController::class, 'index'])->name("main");
Route::post('/main-page', [MainPageController::class, 'insert_Com'])->name('InsertComp');

// TODO: Admin || Dashboard (Routes)
Route::get('/change-password', 'PasswordController@showChangePasswordForm')->name('password.change');
Route::post('/password/reset', 'PasswordController@changePassword')->name('password.update');
Route::post('/my_account', [AdminController::class, 'update_profile'])->name('profile.update');

Auth::routes();
//الدخول على لوحة التحكم للمشروع
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name("dash");
//الجداول العامة
Route::get('/tables_general', [AdminController::class, 'tables_general'])->name("tables_general");
//جداول البينات
Route::get('/tables_data', [AdminController::class, 'tables_data'])->name("tables_data");
//التحليلات المتنوعة
Route::get('/charts_complaints', [AdminController::class, 'charts_complaints'])->name("charts_complaints");

// الدخول على الصفحة الشخصية للمستخدم
Route::get('/my_account', [AdminController::class, 'my_account'])->name("my-account");

//الدخول الى الشكاوى
Route::get('/complaints', [AdminController::class, 'complaints'])->name("complaints");

// روت تغير البينات حسب الصفحة الشخصية لكل موظف  على لوحة التحكم
Route::resource('/{id}', ProfileController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
