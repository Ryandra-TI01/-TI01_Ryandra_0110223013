<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function show():View
    {
        $title = 'Laporan Program Studi';
        $tahun = 2024;
        $data_mhs = [
            ["prodi"=>"SI","jumlah"=>1020],
            ["prodi"=>"TI","jumlah"=>1215],
            ["prodi"=>"BD","jumlah"=>62]
        ];
        return view('dashboard/laporan', compact('title', 'tahun', 'data_mhs'));
    }

    // method untuk menampilkan dashboard
    public function index(){
        return view('admin.contents.dashboard.index');
    }
}
