<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;



class LapIsu extends Controller
{
    public function index()
    {

        $laphoax = DB::table('hoax')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.link_sumber','hoax.tanggal_upload','hoax.gambar','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->get();
        return view('backend.laporan.laporanIsu.index', ['hoax' => $laphoax]);
    }

    public function add()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $lap_categories = Laporan_kategori_model::all(['id_kategori','kategori']);
        return view('backend.laporan.laporanIsu.add-laporan',['gallery' => $gallery, 'categories' => $gallery_categories, 'laporan_kategori' => $lap_categories]);
    }
}
