<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/home',[HomeController::class,"homeView"]);
Route::get('/login',[HomeController::class,"loginView"]);
Route::get('/register',[HomeController::class,"signinView"]);
Route::get('/shop',[HomeController::class,"shopView"]);
Route::get('/cart',[HomeController::class,"cartView"]);
Route::get('/product',[HomeController::class,"productView"]);