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
Route::get('/admin/laporan/laporanKategori/list-kategori', 'App\Http\Controllers\backend\LapKategori@index');
Route::get('/admin/laporan/laporanKategori/tambah-kategori', 'App\Http\Controllers\backend\LapKategori@add');
Route::get('/admin/gallery/gallery', 'App\Http\Controllers\backend\Gallery@index');
Route::get('/admin/gallery/categories', 'App\Http\Controllers\backend\Categories@index');

Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/BeritaHoax', function(){
    return view('BeritaHoax');
});
Route::get('/BeritaHoaxDetil', function(){
    return view('BeritaHoaxDetil');
});