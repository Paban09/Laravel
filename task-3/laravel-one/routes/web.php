<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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


//route e ese search kore url e ki ache
//request ase 3 vabe == url theke, button theke, form submit theke
//request asle, checks, request er jnno url e ki ache

Route::get('/', [TestController::class,'index'])->name('home');
Route::get('/about', [TestController::class,'about'])->name('about');
Route::get('/contact', [TestController::class,'contact'])->name('contact');
Route::get('/product/detail/{id}', [TestController::class,'detail'])->name('product-detail');
Route::post('/full-name', [TestController::class,'fullName'])->name('full-name');
Route::get('/series', [TestController::class,'series'])->name('series');
Route::post('/all-number', [TestController::class,'allNumber'])->name('all-number');
Route::get('/calculator', [TestController::class,'calculator'])->name('calculator');
Route::post('/calculate', [TestController::class,'calculate'])->name('calculate');



