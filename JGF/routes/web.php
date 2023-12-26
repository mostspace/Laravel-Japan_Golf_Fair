<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MyPageAuthController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Login
Route::get('/', [MyPageAuthController::class, 'login'])->name('mypage.login');
Route::post('/mp_login', [MyPageAuthController::class, 'mpLogin'])->name('mypage.login');

// Login ID Forgot
Route::get('/login_id_forgot', [MyPageAuthController::class, 'loginIDForgot']);
Route::post('/login_id_forgot_check', [MyPageAuthController::class, 'loginIDForgotCheck']);
Route::post('/login_id_forgot_check_complete', [MyPageAuthController::class, 'loginIDForgotCheckComplete']);
Route::get('/login_id_forgot_complete', [MyPageAuthController::class, 'loginIDForgotComplete']);

// Register
Route::get('/register', [MyPageAuthController::class, 'register']);
Route::post('/register_check', [MyPageAuthController::class, 'registerCheck']);
Route::post('/register_check_complete', [MyPageAuthController::class, 'registerCheckComplete'])->name('mypage.register_complete');
Route::get('/register_complete', [MyPageAuthController::class, 'registerComplete'])->name('mypage.register_complete');

// My Page
Route::get('/mypage', [MyPageController::class, 'index'])->name('mypage');
