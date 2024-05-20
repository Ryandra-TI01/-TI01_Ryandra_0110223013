<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    //
    public function show(){
        $list_pasien = Pasien::all();
        return view("pasien.show",["list_pasien"=>$list_pasien]);
    }
}
