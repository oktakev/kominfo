<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;



class hoax extends Controller
{
    public function index2()
    {

        $beritahoax = DB::table('hoax')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.link_sumber','hoax.tanggal_upload','hoax.gambar','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->get();
        return view('frontend.hoax.hoax', ['beritahoax' => $beritahoax]);
    }

    public function index3()
    {

        $detilhoax = DB::table('hoax')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.link_sumber','hoax.tanggal_upload','hoax.gambar','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->get();
        return view('frontend.hoax.BeritaHoaxDetil', ['hoax' => $detilhoax]);
    }

    public function edit2($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $lap_categories = Laporan_kategori_model::all(['id_kategori','kategori']);
        $laphoax = DB::table('hoax')->where('id_hoax',$id)->get();
        return view('frontend.hoax.BeritaHoaxDetil',['gallery' => $gallery, 'categories' => $gallery_categories, 'laporan_kategori' => $lap_categories,'hoax' => $laphoax]);
    }
}
