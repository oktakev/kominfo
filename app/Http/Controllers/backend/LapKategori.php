<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;


class LapKategori extends Controller
{
    public function index()
    {
        $lapkat = DB::table('laporan_kategori')
        ->orderBy('id_kategori', 'desc')
        ->get();

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

    public function proses(Request $request)
    {
        DB:: table('laporan_kategori')->insert([
            'kategori' => $request->name
        ]);

        return redirect('admin/laporan/laporanKategori/list-kategori');
    }

    public function update(Request $request)
    {
        DB::table('laporan_kategori')->where('id_kategori', $request->id)->update([
            'kategori' => $request->name
        ]);

        return redirect('admin/laporan/laporanKategori/list-kategori');
    }
}
