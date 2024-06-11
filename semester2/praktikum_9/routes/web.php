<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\StudentController;


// dashboar route
route::get('admin/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');


// ------ index course --------
Route::get('admin/courses',[CoursesController::class,'index']);
// menampilkan data 
Route::get('admin/courses/create',[CoursesController::class,'create']);
Route::post('admin/courses/create',[CoursesController::class,'store']);
// edit data
Route::get('admin/courses/edit/{id}',[CoursesController::class,'edit'])->name('courses.edit');
// update data
Route::put('admin/courses/update/{id}',[CoursesController::class,'update']);
// menghapus data
Route::delete('admin/courses/delete/{id}',[CoursesController::class,'destroy']);


// ------ index student --------
Route::get('admin/student',[StudentController::class,'index']);
// menampilkan data 
Route::get('admin/student/create',[StudentController::class,'create']);
Route::post('admin/student/create',[StudentController::class,'store']);
// edit data
Route::get('admin/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
// update data
Route::put('admin/student/update/{id}',[StudentController::class,'update']);
// menghapus data
Route::delete('admin/student/delete/{id}',[StudentController::class,'destroy']);


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // ------ index course --------
    Route::get('admin/courses',[CoursesController::class,'index']);
    // menampilkan data 
    Route::get('admin/courses/create',[CoursesController::class,'create']);
    Route::post('admin/courses/create',[CoursesController::class,'store']);
    // edit data
    Route::get('admin/courses/edit/{id}',[CoursesController::class,'edit'])->name('courses.edit');
    // update data
    Route::put('admin/courses/update/{id}',[CoursesController::class,'update']);
    // menghapus data
    Route::delete('admin/courses/delete/{id}',[CoursesController::class,'destroy']);


    // ------ index student --------
    Route::get('admin/student',[StudentController::class,'index']);
    // menampilkan data 
    Route::get('admin/student/create',[StudentController::class,'create']);
    Route::post('admin/student/create',[StudentController::class,'store']);
    // edit data
    Route::get('admin/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
    // update data
    Route::put('admin/student/update/{id}',[StudentController::class,'update']);
    // menghapus data
    Route::delete('admin/student/delete/{id}',[StudentController::class,'destroy']);
});

require __DIR__.'/auth.php';
