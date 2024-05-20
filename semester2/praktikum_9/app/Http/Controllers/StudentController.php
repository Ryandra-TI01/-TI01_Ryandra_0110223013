<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // mendapat data student dari database
    public function index(){
        $student = Student::all();
        // panggil view
        return view('admin.contents.student.index',[
            'student'=> $student
        ]);
    }

}
