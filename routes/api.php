<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::group(['prefix' => 'v0.0.1'], function(){
  Route::group(['prefix' => 'auth'], function () {
    Route::post('login',[AuthController::class, 'login']);  
      Route::post('logout',[AuthController::class, 'logout']);
      Route::post('refresh',[AuthController::class, 'refresh']);
  });


Route::post('register',[AuthController::class,'register']);
      });




