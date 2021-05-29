<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controllertamam extends Controller
{
    public function anggota()
    {
        $anggota=DB::table('anggota')->get();
        return view('anggota0181',['anggota'=>$anggota]);
    }
}
