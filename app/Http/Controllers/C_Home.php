<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class C_Home extends Controller
{
    //
    public function index(){
        return view('v_home', [
            'data' => Mahasiswa::all()
        ]);
    }
}
