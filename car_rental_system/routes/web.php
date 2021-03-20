<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsFormController;
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
    return view('ad');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::view('/admin/addCar','addCarForm');
Route::post('/admin/result/',[AdminController::class,'addCar']);

Route::get('/admin/showCars/',[AdminController::class,'showCars']);
Route::post('/admin/viewCar/{id}',[AdminController::class,'viewCar']);
Route::post('/admin/editCar/{id}',[AdminController::class,'editCar']);
Route::post('/admin/updateCar/{id}',[AdminController::class,'update']);
Route::post('/admin/deleteCar/{id}',[AdminController::class,'deleteCar']);
