@extends('admin.main')
@section('content')

<table class="table table-sm">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
             <th>Tgl Lahir</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_pasien as $pasien)
            <tr>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>
                    <a href="">View</a> | <a href=""> Edit</a> | <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection