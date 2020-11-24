<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Gallery_categories_model;

class Categories extends Controller
{
    public function index()
    {

        $kat = DB::table('gallery_categories')
        ->orderBy('id_category', 'desc')
        ->get();

        return view('backend.galeri.kategori.index', ['gallery_categories' => $kat]);
    }

    public function add()
    {
        return view('backend.galeri.kategori.add-kategori');
    }

    public function edit($id)
    {
        $kat = DB::table('gallery_categories')->where('id_category',$id)->get();
        return view('backend.galeri.kategori.edit-kategori',['gallery_categories' => $kat]);
    }
}
