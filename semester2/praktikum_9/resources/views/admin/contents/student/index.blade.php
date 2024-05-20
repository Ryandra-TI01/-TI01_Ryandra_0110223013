@extends('admin.main')
@section('content')
    

<div class="pagetitle">
    <h1>Student</h1>
    <nav>
      <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li> --}}
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Student</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="section">
    <div class="card">
        <div class="card-body p-3">
            <a href="student/create" class="btn btn-primary m-3">+ Tambah</a>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>name</th>
                        <th>nim</th>
                        <th>major</th>
                        <th>class</th>
                        <th>action</th>
                    </tr>
                    @foreach ($student as $student_data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student_data->name }}</td>
                            <td>{{ $student_data->nim }}</td>
                            <td>{{ $student_data->major }}</td>
                            <td>{{ $student_data->class }}</td>
                            <td>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
  </div>


  @endsection