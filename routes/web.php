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