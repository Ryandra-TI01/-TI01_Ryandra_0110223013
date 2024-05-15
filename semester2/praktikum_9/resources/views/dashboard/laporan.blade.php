<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}} {{$tahun}}</h1>
    <table border="1">
        <tr>
            <th>Program Studi</th>
            <th>Jumlah Studi</th>
        </tr>
        @foreach ($data_mhs as $mhs)
        <tr>
            <td>{{$mhs['prodi']}}</td>
            <td>{{$mhs['jumlah']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>