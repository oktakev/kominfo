<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\Gallery_categories_model;
use App\Gallery_model;

class Postingan extends Controller
{
    public function index()
    {
        $pos = DB::table('gallery')
        ->Join('gallery_categories', 'gallery_categories.id_category', 'gallery.id_category')
        ->Select('gallery.id_gallery', 'gallery.img', 'gallery_categories.category_name')
        ->orderBy('id_gallery', "desc")
        ->get();


        return view('backend.galeri.postingan.index', ['gallery' => $pos]);
    }

    public function add()
    {
        $gallery_categories = Gallery_categories_model::all(['id_category','category_name']);
        return view('backend.galeri.postingan.add-postingan',['gallery_categories' => $gallery_categories]);
    }

    function proses(Request $request)
    {
                //validasi
                $request->validate([
                    'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3072'
                ]);
                //mengambil informasi
                $img = $request->file('img');

                // nama file
                $namefile = $img->getClientOriginalName();

                // file size
                $size = $img->getSize();

                // upload file
                $time = time();
                $newName = substr($time, strlen($time) - 5, 5) . "." . $img->getClientOriginalExtension();
                $tujuan_upload = 'images/gallery';
                $img->move($tujuan_upload, $newName);

                // insert
                DB::table('gallery')->insert([
                    'img' => $newName,
                    'id_category' => $request->id_category,
                    // menyimpan data file yang diupload ke variabel $file
                ]);
                    return redirect('/admin/galeri/postingan/list-postingan')->with('status', 'Galeri berhasil ditambahkan');
                }

    public function edit($id)
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        return view('backend.galeri.postingan.edit-postingan',['id_gallery' => $gallery, 'id_category' => $gallery_categories]);

        //  $pos = DB::table('gallery')->where('id_gallery',$id)->get();
        //  $kat = DB::table('gallery_categories')->where('id_category',$id)->get();
        //  return view('backend.galeri.postingan.edit-postingan',['gallery' => $pos,'gallery_categories' =>$kat]);
    }

    function update(Request $request)
    {
        if ($request->img) {
        }
        DB::table('gallery')->where('id_gallery',$request->id)->update([
            'img' => $request->img,
            'id_category' => $request->id_category
            
        ]);
        return redirect('/admin/galeri/postingan/list-postingan');
    }
}
