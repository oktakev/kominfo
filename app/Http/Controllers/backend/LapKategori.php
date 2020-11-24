<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LapKategori extends Controller
{
    public function index()
    {
        $lapkat = DB::table('laporan_kategori')->get();

        return view('backend.laporan.laporanKat.index', ['laporan_kategori' => $lapkat]);
    }

    public function add()
    {
        return view('backend.laporan.laporanKat.add-laporan');
    }

    public function edit($id)
    {
        $lapkat = DB::table('laporan_kategori')->where('id_kategori',$id)->get();
        return view('backend.laporan.laporanKat.edit-laporan',['laporan_kategori' => $lapkat]);
    }
}
