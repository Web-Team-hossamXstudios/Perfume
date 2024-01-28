<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddressController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

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
    Route::get('/user-profile', [AuthController::class, 'clientProfile']);
    Route::post('/update-profile',[AuthController::class, 'updateProfile']);
});

<<<<<<< HEAD
//Catogory
Route::get('category',[CategoryController::class,'index']);

//Address
Route::post('address',[AddressController::class,'store']);
Route::post('address_update',[AddressController::class,'update']);
Route::get('address_show',[AddressController::class,'index']);
=======
//Category
Route::get('/category',[CategoryController::class,'index']);

//Address
Route::post('/address',[AddressController::class,'store']);
Route::post('/address_update',[AddressController::class,'update']);
Route::get('/address/{id}',[AddressController::class,'index']);
>>>>>>> 1e9e878d8bc787aa5000e7463d21f3d3c723aa42

//Product
Route::get('/products',[ProductController::class,'index']);
Route::get('/product/{id}',[ProductController::class,'show']);

<<<<<<< HEAD
//Review
Route::get('/reviews',[ReviewController::class,'index']);
Route::post('/reviews',[ReviewController::class,'store']);
=======
//order
Route::post('/order/{id}',[OrderController::class,'store']);
//Route::post('/order/{id}/orderitem',[OrderItemController::class,'store']);
>>>>>>> 1e9e878d8bc787aa5000e7463d21f3d3c723aa42
