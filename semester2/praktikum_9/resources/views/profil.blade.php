@php
    $username = 'Ryandra Athaya Saleh';
    $role = 'admin';
@endphp
@if ($role == 'admin')
    <h3>Selamat Datang {{$username}} anda adalah seorang {{$role}}</h3>
@else
    <h3>Selamat Datang {{$username}} anda adalah user</h3>    
@endif