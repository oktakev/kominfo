<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LapKategori extends Controller
{
    public function index()
    {
        return view('backend.laporanKategori');
    }
}
