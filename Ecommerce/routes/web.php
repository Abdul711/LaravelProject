<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class,"index"]);
Route::post('/admin',[AdminController::class,"login"]);
Route::get('admin/signup',[AdminController::class,"signup"]);
Route::post('admin/signup',[AdminController::class,"register"]);
Route::get('admin/forgot',[AdminController::class,"forgot"]);
Route::get('admin/dashboard',[AdminController::class,"dashboard"]);
Route::get('admin/category/manage/{id?}',[CategoryController::class,"create"]);
Route::get('admin/category',[CategoryController::class,"index"]);
/* Category Crud Operation */
Route::get('admin/product/manage/{id?}',[ProductController::class,"create"]);
Route::get('admin/product',[ProductController::class,"index"]);
/* Category Crud Operation */
Route::get('admin/brand/manage/{id?}',[BrandController::class,"create"]);
Route::get('admin/brand',[BrandController::class,"index"]);
/* Category Crud Operation */
Route::get('admin/color/manage/{id?}',[ColorController::class,"create"]);
Route::get('admin/color',[ColorController::class,"index"]);
/* Category Crud Operation */
Route::get('admin/size/manage/{id?}',[SizeController::class,"create"]);
Route::get('admin/size',[SizeController::class,"index"]);
/* Category Crud Operation */
Route::get('admin/order/manage/{id?}',[OrderController::class,"create"]);
Route::get('admin/order',[OrderController::class,"index"]);
Route::get('admin/users/{id}', function ($id) {
    
});