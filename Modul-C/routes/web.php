<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NftController;
use App\Http\Controllers\DashboardNftController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/explore', [ExploreController::class,'index']);

Route::get('/nft/{id}', [NftController::class,'detail']);

Route::get('/cart', [CartController::class,'index'])->middleware('auth');
Route::post('/cart/{id_nft}', [CartController::class,'store'])->middleware('auth');
Route::delete('/cart/{id_nft}', [CartController::class,'delete'])->middleware('auth');

Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::get('/register',[AuthController::class,'register'])->middleware('guest');
Route::post('/login',[AuthController::class,'store_login'])->middleware('guest');
Route::post('/register',[AuthController::class,'store_register'])->middleware('guest');
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth');

Route::get('/create',[NftController::class,'create'])->middleware('auth');
Route::post('/create',[NftController::class,'store'])->middleware('auth');

Route::get('/dashboard/nft', [DashboardNftController::class,'index'])->middleware('admin');
Route::delete('/dashboard/nft/{id}', [DashboardNftController::class,'delete'])->middleware('admin');

Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('admin');
Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');
Route::post('/dashboard/users/{id}/admin', [DashboardUserController::class, 'mengadmin'])->middleware('admin');
