<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
        $gallery_categories = Gallery_categories_model::all(['id_category','category_name']);
        return view('backend.galeri.postingan.add-postingan',['gallery_categories' => $gallery_categories]);
    }

    public function edit($id)
    {
        $pos = DB::table('gallery')->where('id_gallery',$id)->get();
        return view('backend.galeri.postingan.edit-postingan',['gallery' => $pos]);
    }
}
