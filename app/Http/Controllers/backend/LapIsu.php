<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Laporan_kategori_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use Carbon\Carbon;



class LapIsu extends Controller
{
    public function index()
    {

        $laphoax = DB::table('hoax')
        ->join('gallery','gallery.id_gallery','hoax.gambar')
        ->join('laporan_kategori','laporan_kategori.id_kategori','hoax.id_kategori')
        ->select('hoax.id_hoax','hoax.judul','laporan_kategori.kategori'
        ,'hoax.link_sumber','hoax.tanggal_upload','hoax.gambar','gallery.img','hoax.content')
        ->orderBy('id_hoax', 'desc')
        ->get();
        return view('backend.laporan.laporanIsu.index', ['hoax' => $laphoax]);
    }

    function proses(Request $request)
    {
                 $request->validate([
                    'judul' => 'required',
                    'id_kategori' => 'required',
                    'link_sumber' => 'required',
                    'id_gallery' => 'required',
                    'content' => 'required'
            ]);

            DB::table('hoax')->insert([
                'judul' => $request->judul,
                'id_kategori' => $request->id_kategori,
                'tanggal_upload'=> Carbon::now(),
                'link_sumber' => $request->link_sumber,
                'gambar' => $request->id_gallery,
                'content' => $request->content

                ]);

         return redirect('/admin/laporan/laporanIsu/list-isu')->with('status', 'Laporan Hoaks berhasil ditambahkan');
    }

    public function add()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $lap_categories = Laporan_kategori_model::all(['id_kategori','kategori']);
        return view('backend.laporan.laporanIsu.add-laporan',['gallery' => $gallery, 'categories' => $gallery_categories, 'laporan_kategori' => $lap_categories]);
    }

    public function delete($id)
    {
        DB::table('hoax')->where('id_hoax', $id)->delete();

        return redirect('admin/laporan/laporanIsu/list-isu');
    }
}
