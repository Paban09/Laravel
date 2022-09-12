<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/all-courses', [HomeController::class,'courses'])->name('courses');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'auth'])->name('login-registration');
Route::get('/course-detail', [HomeController::class,'detail'])->name('course-detail');


Route::get('/teacher/login', [TeacherAuthController::class,'login'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class,'loginCheck'])->name('teacher.login');
Route::post('/teacher/logout', [TeacherAuthController::class,'logout'])->name('teacher.logout');

Route::get('/teacher/dashboard', [TeacherDashboardController::class,'index'])->name('teacher.dashboard');
Route::get('/course/add', [CourseController::class,'index'])->name('course.add');
Route::get('/course/manage', [CourseController::class,'manage'])->name('course.manage');

Route::post('/course/create', [CourseController::class,'create'])->name('course.create');
Route::get('/course/detail/{id}', [CourseController::class,'detail'])->name('course.detail');
Route::get('/course/edit/{id}', [CourseController::class,'edit'])->name('course.edit');
Route::post('/course/update/{id}', [CourseController::class,'update'])->name('course.update');
Route::get('/course/delete/{id}', [CourseController::class,'delete'])->name('course.delete');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/teacher/add', [TeacherController::class,'index'])->name('teacher.add');
    Route::post('/teacher/create', [TeacherController::class,'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class,'delete'])->name('teacher.delete');
});
