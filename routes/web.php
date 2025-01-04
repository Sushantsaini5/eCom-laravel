<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\UserAuth;

Route::get('/login', function () {
  return view('login');
});
//Route::view('/','login');

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);