<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;




      Route::post('/register',[AuthController::class,'register']);
      Route::post('/login',[AuthController::class,'login']);
      Route::post('/logout',[AuthController::class,'logout']);
      Route::post('/add',[ProductController::class,'storeProducts']);
      Route::get('/get',[ProductController::class,'getAllProducts']);


?>
