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

    public function update(Request $request){
        
        DB::table('gallery_categories')->where('id_category', $request->id)->update([
            'category_name' => $request->nama,
        ]);

        return redirect('admin/galeri/categories/list-categories');
    }

    public function proses(Request $request)
    {

        $request->validate([
            'category_name'=> 'required'
        ]);

        DB::table('gallery_categories')->insert([
            'category_name' => $request->name
        ]);

        return redirect('admin/galeri/categories/list-categories');
    }

    public function delete($id)
    {
        DB::table('gallery_categories')->where('id_category', $id)->delete();

        return redirect('admin/galeri/categories/list-categories');
    }
}
