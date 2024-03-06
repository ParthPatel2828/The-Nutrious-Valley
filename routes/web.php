<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\NopaymentController;
use App\Http\Controllers\BmiController;



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
Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/service',[ServiceController::class,'index'])->name('service.index');
Route::get('/nopayment',[NopaymentController::class,'index'])->name('nopayment.index');
Route::post('/calculate/bmi', [BmiController::class, 'store'])->name('calculate.bmi');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


