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
}
