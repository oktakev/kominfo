<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Gallery_model;
use \App\Gallery_categories_model;

class Postingan extends Controller
{
    public function index()
    {
        $pos = DB::table('gallery')->get();


        return view('backend.galeri.postingan.index', ['gallery' => $pos]);
    }

    public function add()
    {
        return view('backend.galeri.postingan.add-postingan');
    }

    public function edit()
    // {
    //     $galeri["galeri"] = DB::table('gallery')->where('id_gallery',$id)->get();
    //     $galeri["id_kategori"] = DB::table('gallery_categories')->where('id_category',$id)->get();
	//     return view('backend.gallery.gallery.edit-gallery',['id_category' => $galeri]);
    // }
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.galeri.postingan.edit-postingan',['id_gallery' => $gallery, 'id_category' => $gallery_categories]);
    }
}
