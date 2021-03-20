<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
    return redirect('/admin/home/'); 
});


Route::post('/result',[UserController::class,'result']);
Route::view('/upload','form');
Route::view('/admin/addCar','addCarForm');
Route::post('/admin/result/',[UserController::class,'addCar']);
Route::get('/admin/showCars/',[UserController::class,'showCars']);
Route::post('/admin/viewCar/{id}',[UserController::class,'viewCar']);
Route::post('/admin/editCar/{id}',[UserController::class,'editCar']);
Route::post('/admin/updateCar/{id}',[UserController::class,'update']);
Route::post('/admin/deleteCar/{id}',[UserController::class,'deleteCar']);

Route::post('/home/bookCar/',[UserController::class,'bookCar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');