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
    // method untuk menampilkan data student
    public function create(){
        return view('admin.contents.student.create');
    }
    // method mengirim data
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'nim'=>'required|numeric',
            'major'=>'required',
            'class'=>'required',
        ]);

        Student::create([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,

        ]);

        return redirect('/admin/student')->with('pesan','Berhasil menambahkan data');
    }

    public function edit($id){
        // cari berdasarkan id
        $student = Student::find($id);

        return view('admin.contents.student.edit',[
            'student'=> $student
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
        ]);

        // simpan perubahan
        $student->update([
            'name'=> $request->name,
            'nim'=> $request->nim,
            'major'=> $request->major,
            'class'=> $request->class,
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
