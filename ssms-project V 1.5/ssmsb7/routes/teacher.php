<?php
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\TeacherEnrollController;
use App\Http\Controllers\CourseController;


Route::middleware(['teacher'])->group(function(){
    Route::post('/teacher/logout', [TeacherAuthController::class,'logout'])->name('teacher.logout');
    Route::get('/teacher/dashboard', [TeacherDashboardController::class,'index'])->name('teacher.dashboard');
    Route::get('/teacher/manage-enroll', [TeacherEnrollController::class,'manageEnroll'])->name('teacher.manage-enroll');
    Route::get('/course/add', [CourseController::class,'index'])->name('course.add');
    Route::get('/course/manage', [CourseController::class,'manage'])->name('course.manage');
    Route::post('/course/create', [CourseController::class,'create'])->name('course.create');
    Route::get('/course/detail/{id}', [CourseController::class,'detail'])->name('course.detail');
    Route::get('/course/edit/{id}', [CourseController::class,'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class,'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class,'delete'])->name('course.delete');

});
Route::get('/teacher/login', [TeacherAuthController::class,'login'])->name('teacher.login');
Route::post('/teacher/login', [TeacherAuthController::class,'loginCheck'])->name('teacher.login');
