<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::get('admin/users/{id}', function ($id) {
    
});