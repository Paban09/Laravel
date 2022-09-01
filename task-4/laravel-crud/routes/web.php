<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class,'index'])->name('home');
Route::get('/add-blog', [BlogController::class,'add'])->name('blog.add');
Route::post('/new-blog', [BlogController::class,'create'])->name('blog.new');
Route::get('/manage-blog', [BlogController::class,'manage'])->name('blog.manage');
