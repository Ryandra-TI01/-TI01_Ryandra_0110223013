@extends('admin.main')
@section('content')
    

<div class="pagetitle">
    <h1>Courses</h1>
    <nav>
      <ol class="breadcrumb">
        {{-- <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li> --}}
        <li class="breadcrumb-item"></li>
        <li class="breadcrumb-item active">Courses</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <div class="section">
    <div class="card">
        <div class="card-body p-3">
            @if (Auth::user()->role == 'administrator')
             <a href="/admin/courses/create" class="btn btn-primary m-3">+ Tambah</a>
            @endif
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>no</th>
                        <th>name</th>
                        <th>category</th>
                        <th>desc</th>
                        @if (Auth::user()->role == 'administrator')
                            <th>action</th>
                        @endif
                    </tr>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->category }}</td>
                            <td>{{ $course->desc }}</td>
                            @if (Auth::user()->role == 'administrator')
                            <td class="d-flex">
                                <a href="/admin/courses/edit/{{ $course->id }}" class="btn btn-warning me-3">Edit</a>
                                <form method="POST" action="/admin/courses/delete/{{ $course->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="ms-3 btn btn-danger" type="submit" onclick="return confirm('Apakah anda ingin mengahpusnya?')">Hapus</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
  </div>


  @endsection