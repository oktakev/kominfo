<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', 'App\Http\Controllers\backend\Admin@login');
Route::post('/admin', 'App\Http\Controllers\backend\Admin@loginPost');
Route::get('/admin/dashboard', 'App\Http\Controllers\backend\Admin@dashboard');
Route::get('/admin/logout', 'App\Http\Controllers\backend\Admin@logout');
Route::get('/admin/laporan/laporanIsu/list-isu', 'App\Http\Controllers\backend\LapIsu@index');
Route::get('/admin/laporan/laporanIsu/tambah-isu', 'App\Http\Controllers\backend\LapIsu@add');
Route::post('/admin/laporan/laporanIsu/tambah-isu', 'App\Http\Controllers\backend\LapIsu@proses');
Route::post('/admin/laporan/laporanIsu/update', 'App\Http\Controllers\backend\LapIsu@update');
Route::get('/admin/laporan/laporanIsu/edit-isu/{id}', 'App\Http\Controllers\backend\LapIsu@edit');
Route::get('/admin/laporan/laporanIsu/delete/{id}', 'App\Http\Controllers\backend\LapIsu@delete');
Route::get('/admin/laporan/laporanKategori/list-kategori', 'App\Http\Controllers\backend\LapKategori@index');
Route::get('/admin/laporan/laporanKategori/tambah-kategori', 'App\Http\Controllers\backend\LapKategori@add');
Route::post('/admin/laporan/laporanKategori/proses', 'App\Http\Controllers\backend\LapKategori@proses');
Route::post('/admin/laporan/laporanKategori/update', 'App\Http\Controllers\backend\LapKategori@update');
Route::get('/admin/laporan/laporanKategori/edit-kategori/{id}', 'App\Http\Controllers\backend\LapKategori@edit');
Route::get('/admin/laporan/laporanKategori/delete/{id}', 'App\Http\Controllers\backend\LapKategori@delete');
Route::get('/admin/galeri/postingan/list-postingan', 'App\Http\Controllers\backend\Postingan@index');
Route::get('/admin/galeri/postingan/tambah-postingan', 'App\Http\Controllers\backend\Postingan@add');
Route::get('/admin/galeri/postingan/edit-postingan/{id}', 'App\Http\Controllers\backend\Postingan@edit');
Route::get('/admin/galeri/postingan/delete/{id}', 'App\Http\Controllers\backend\Postingan@delete');
Route::get('/admin/galeri/categories/list-categories', 'App\Http\Controllers\backend\Categories@index');
Route::get('/admin/galeri/categories/tambah-kategori', 'App\Http\Controllers\backend\Categories@add');
Route::get('/admin/galeri/categories/delete/{id}', 'App\Http\Controllers\backend\Categories@delete');
Route::post('/admin/galeri/categories/proses', 'App\Http\Controllers\backend\Categories@proses');
Route::post('/admin/galeri/categories/update', 'App\Http\Controllers\backend\Categories@update');
Route::get('/admin/galeri/categories/edit-kategori/{id}', 'App\Http\Controllers\backend\Categories@edit');
Route::get('/admin/gallery/gallery', 'App\Http\Controllers\backend\Gallery@index');
Route::get('/admin/gallery/categories', 'App\Http\Controllers\backend\Categories@index');
Route::post('/admin/galeri/postingan/tambah-postingan','App\Http\Controllers\backend\Postingan@proses');
Route::post('/admin/galeri/postingan/edit-postingan/update', 'App\Http\Controllers\backend\Postingan@update');
Route::get('/admin/gallery/bycategory', 'backend\Postingan@bycategory');



Route::get('/welcome', function(){
    return view('welcome');
});
// Route::get('/berita_hoax', function(){
//     return view('frontend/hoax/hoax');
// });
Route::get('/BeritaHoaxDetil', function(){
    return view('frontend/hoax/BeritaHoaxDetil');
});
//sinmun
Route::get('/HomeBeritaHoax', function(){
    return view ('newfrontend/HomeBeritaHoax');
});
Route::get('/KategoriHoax', function(){
    return view ('newfrontend/KategoriHoax');
});
Route::get('/PostHoax', function()
{
    return view ('newfrontend/PostHoax');
});

//BUKAN PUNYA YADRI
Route::get('/berita_hoax', 'App\Http\Controllers\frontend\hoax@index2');
Route::get('App\Http\Controllers\frontend\hoax@index4');
Route::get('/detil_hoax/{id}', 'App\Http\Controllers\frontend\hoax@edit2');
Route::get('/query','App\Http\Controllers\frontend\hoax@search');



Route::get('/berita_hoax2', 'App\Http\Controllers\frontend\hoax2@index2');
Route::get('/detil_hoax2/{id}', 'App\Http\Controllers\frontend\hoax2@edit2');


