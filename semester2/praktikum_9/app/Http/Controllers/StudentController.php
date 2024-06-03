<?php

namespace App\Http\Controllers;

use App\Models\Courses;
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
    // method untuk menampilkan data student
    public function create(){
        $courses = Courses::all();
        return view('admin.contents.student.create',[
            'courses'=> $courses
        ]);
    }
    // method mengirim data
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'nim'=>'required|numeric',
            'major'=>'required',
            'class'=>'required',
            'course_id'=>'nullable',
        ]);

        Student::create([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,
            'course_id'=> $request->course_id,

        ]);

        return redirect('/admin/student')->with('pesan','Berhasil menambahkan data');
    }

    public function edit($id){
        // cari berdasarkan id
        $student = Student::find($id);
        // dd($student);
        $courses = Courses::all();
        return view('admin.contents.student.edit',[
            'student'=> $student,
            'courses'=> $courses,
        ]);

    }

    // menyimpan hasil update
    public function update(Request $request, $id){
        $student = Student::find($id); 
        $request->validate([
            'name'=>'required',
            'nim'=>'required|numeric',
            'major'=>'required',
            'class'=>'required',
            'course_id'=>'nullable',
        ]);

        // simpan perubahan
        $student->update([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,
            'course_id'=> $request->course_id,
        ]);
        return redirect('/admin/student')->with('pesan','Berhasil menambahkan student');
    }  

    // menghapus
    public function destroy($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/admin/student')->with('pesan','Berhasil DELETE student');
    }
}
