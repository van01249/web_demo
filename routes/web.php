<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Trang chủ
Route::get('/', function () {
    return view('pages.home');
});

//Đăng ký
Route::get('/dang-ky', [AuthController::class, 'pageRegister'])->name('register');

//Đăng nhập
Route::post('/login', [AuthController::class, 'login']);