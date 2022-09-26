<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeacherController;

use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentAuthController;
use App\Http\Controllers\AdminEnrollController;

use App\Http\Controllers\CategoryController;
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
Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');

Route::resource('category',\App\Http\Controllers\CategoryController::class);


Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about-us', [HomeController::class,'about'])->name('about');
Route::get('/all-courses', [HomeController::class,'courses'])->name('courses');
Route::get('/contact-us', [HomeController::class,'contact'])->name('contact');
Route::get('/login-registration', [HomeController::class,'auth'])->name('login-registration');
Route::get('/course-detail/{id}', [HomeController::class,'detail'])->name('course-detail');

Route::get('/send-mail',[HomeController::class,'sendMail'])->name('send-mail');

Route::middleware(['student'])->group(function(){
    Route::post('/student/update/{id}', [StudentDashboardController::class,'update'])->name('update-student');
//Route::get('/student/dashboard', [StudentDashboardController::class,'index'])->name('student-dashboard')->middleware('student');
    Route::get('/student/dashboard', [StudentDashboardController::class,'index'])->name('student-dashboard')->middleware('student');
    Route::get('/student/profile', [StudentDashboardController::class,'profile'])->name('student-profile');
    Route::get('/student/course', [StudentDashboardController::class,'course'])->name('student-course');
    Route::get('/student/logout', [StudentAuthController::class,'logout'])->name('student-logout');
});
Route::post('/student/login', [StudentAuthController::class,'login'])->name('student-login');

Route::get('/enroll-now/{id}', [EnrollController::class,'index'])->name('enroll-now');
Route::post('/new-enroll/{id}', [EnrollController::class,'enroll'])->name('enroll.new');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::get('/teacher/add', [TeacherController::class,'index'])->name('teacher.add');
    Route::post('/teacher/create', [TeacherController::class,'create'])->name('teacher.create');
    Route::get('/teacher/manage', [TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('/teacher/edit/{id}', [TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class,'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class,'delete'])->name('teacher.delete');

    Route::get('/admin/manage-course', [AdminCourseController::class,'manageCourse'])->name('admin.manage-course');
    Route::get('/admin/manage-offer', [AdminCourseController::class,'manageOffer'])->name('admin.manage-offer');
    Route::post('/admin/create-course-offer', [AdminCourseController::class,'createCourseOffer'])->name('admin.create-course-offer');
    Route::get('/admin/course-detail/{id}', [AdminCourseController::class,'courseDetail'])->name('admin.course.detail');
    Route::get('/admin/update-course-status/{id}', [AdminCourseController::class,'updateStatus'])->name('admin.update-course.status');
    Route::get('/admin/edit-course-offer/{id}', [AdminCourseController::class,'editOffer'])->name('admin.course-offer-edit');
    Route::post('/admin/update-course-offer', [AdminCourseController::class,'updateOffer'])->name('admin.update-course-offer');

    Route::get('/admin/manage-enroll', [AdminEnrollController::class,'index'])->name('admin.manage-enroll');
    Route::get('/admin/update-enroll-status/{id}', [AdminEnrollController::class,'update'])->name('admin.update-enroll-status');

});
