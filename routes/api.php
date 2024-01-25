<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Aut JWT
Route::group([
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
<<<<<<< HEAD
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

//Product
Route::get('/products',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show']);
=======
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::get('category',[CategoryController::class,'index']);
<<<<<<< HEAD
Route::get('address',[AddressController::class,'store']);
>>>>>>> origin/master
=======
Route::post('address',[AddressController::class,'store']);
Route::post('address_update',[AddressController::class,'update']);
>>>>>>> 3cf95a6a6209d6a2d4141bfbab989dffb54ac0ce
