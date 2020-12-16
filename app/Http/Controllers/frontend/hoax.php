<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use App\Crud;



class hoax extends Controller
{
    public function index()
    {
   
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->paginate(2);
        return view('frontend.hoax.hoax', ['beritahoax' => $beritahoax]);

        
    }
    public function index2()
    {
   
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->where('hoax.id_kategori','=',5)
        ->orderBy('id_hoax', 'desc')
        ->paginate(4);
        return view('frontend.hoax.hoax', ['beritahoax' => $beritahoax]);


    }

    public function index3()
    {
   
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->where('hoax.id_kategori','=',4)
        ->paginate(2);
        return view('frontend.hoax.hoax', ['beritahoax' => $beritahoax]);

        
    }
    public function index4()
    {
   
        
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->where('hoax.id_kategori','=',5)
        ->get();
        return view('frontend.hoax.BeritaHoaxDetil', ['hoax' => $beritahoax]);
        
    }

    public function index5()
    {
   
        $beritahoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->where('hoax.id_kategori','=',4)
        ->paginate(2);
        return view('frontend.template.main', ['beritahoax' => $beritahoax]);

        
    }



    public function edit2($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $lap_categories = Laporan_kategori_model::all(['id_kategori','kategori']);
        $laphoax = DB::table('hoax')->where('id_hoax',$id)->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->get();
        return view('frontend.hoax.BeritaHoaxDetil',['gallery' => $gallery, 'categories' => $gallery_categories, 'laporan_kategori' => $lap_categories,'hoax' => $laphoax]);

    }


    public function search(Request $request){

        $query = $request->get('q');

        $hasil = DB::table('hoax')
        ->where('judul', 'LIKE', '%' . $query . '%')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')        
        ->orderBy('id_hoax', 'desc')
        ->paginate(7);

        // return response($query . 'Hi, i am okay', 200)
        //           ->header('Content-Type', 'text/plain');
        return view('frontend.hoax.Result', compact('hasil', 'query'));

    }
}
