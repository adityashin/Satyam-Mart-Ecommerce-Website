<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Front_Controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\product_controller;
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


Route::resource('/category',CategoryController::class);

Route::resource('/product',product_controller::class);

Route::get('/',[login_controller::class,'index']);

