<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// // routing baru
// Route::get('/salam',function(){
//     return "Selamat pagi ges";
// });
// // routing profil
// Route::get('/profil',function(){
//     return view('profil');
// });
// // routing about
// Route::get('/about',function(){
//     return view('about');
// });
// // routing about
// Route::get('/dashboard',[DashboardController::class,'show']);



// dashboar route
route::get('admin/dashboard',[DashboardController::class,'index']);
// Route::get('pasien/show',[PasienController::class,'show']);
Route::get('admin/student',[StudentController::class,'index']);
Route::get('admin/courses',[CoursesController::class,'index']);

// menampilkan data student
Route::get('admin/student/create',[StudentController::class,'create']);
Route::post('admin/student/create',[StudentController::class,'store']);

// edit data
Route::get('admin/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');

// update data student
Route::put('admin/student/update/{id}',[StudentController::class,'update']);

// menghapus data
Route::delete('admin/student/delete/{id}',[StudentController::class,'destroy']);