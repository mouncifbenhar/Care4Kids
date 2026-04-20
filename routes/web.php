<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/Dashboard', function () {
    return view('Dashboard');
})->middleware('auth.check');

Route::get('/register',[AuthController::class,'Show_register_page']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'Show_login_page']);
Route::post('/login',[AuthController::class,'login']);


Route::post('/logout',[AuthController::class,'logout'])->middleware('auth.check');
Route::get('/profile',[ProfileController::class,'profile'])->middleware('auth.check');
Route::post('/update_profile',[ProfileController::class,'update_profile'])->middleware('auth.check');
