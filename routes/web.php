<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\MedicationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccinesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[AuthController::class,'Show_register_page']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/login',[AuthController::class,'Show_login_page']);
Route::post('/login',[AuthController::class,'login']);


Route::post('/logout',[AuthController::class,'logout'])->middleware('auth.check');
Route::get('/profile',[ProfileController::class,'profile'])->middleware('auth.check');
Route::post('/update_profile',[ProfileController::class,'update_profile'])->middleware('auth.check');



Route::get('/Dashboard',[DashboardController::class,'Dashboard'])->middleware('auth.check');

