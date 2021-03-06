<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;



class hoax2 extends Controller
{
    public function index()
    {
        //for home
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->paginate(4);
        return view('newfrontend/HomeBeritaHoax', ['beritahoax' => $beritahoax]);
    }
    public function index2()
    {
        //for hoax
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->where('hoax.id_kategori','=',4)
        ->orderBy('id_hoax', 'desc')
        ->paginate(4);
        return view('newfrontend/KategoriHoax', ['beritahoax' => $beritahoax]);

        

    }
    public function index3()
    {
        //for disinformasi
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->where('hoax.id_kategori','=',5)
        ->orderBy('id_hoax', 'desc')
        ->paginate(4);
        return view('newfrontend/KategoriDis', ['beritahoax' => $beritahoax]);

    }

    public function edit2($id)
    {
        $laphoax = DB::table('hoax')->where('id_hoax',$id)
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->get();

        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->get();

        // View:share('hoax',$laphoax);
        // View:share('beritahoax',$beritahoax);
        

        // return View::make('hoax',$laphoax)
        // ->nest('beritahoax',$beritahoax);


        return view('newfrontend/PostHoax',['hoax' => $laphoax,'beritahoax' => $beritahoax]);
              
        
    }
    public function search(Request $request){

        $query = $request->get('q');

        $hasil = DB::table('hoax')
        ->where('judul', 'LIKE', '%' . $query . '%')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        // ->get();
        ->paginate(1000);

        // return response($query . 'Hi, i am okay', 200)
        //           ->header('Content-Type', 'text/plain');
        return view('newfrontend/ResultHoax', compact('hasil', 'query'));
}
}