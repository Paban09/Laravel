<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/add-course',[CourseController::class,'add'])->name('course.add');
Route::post('/create-course',[CourseController::class,'create'])->name('course.create');
Route::get('/manage-course',[CourseController::class,'manage'])->name('course.manage');
Route::get('/edit-course/{id}',[CourseController::class,'edit'])->name('course.edit');
Route::post('/update-course/{id}',[CourseController::class,'update'])->name('course.update');
Route::get('/delete-course/{id}',[CourseController::class,'delete'])->name('course.delete');

