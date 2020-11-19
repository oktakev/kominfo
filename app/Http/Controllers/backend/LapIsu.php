<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LapIsu extends Controller
{
    public function index()
    {
        $laphoax = DB::table('hoax')->get();


        return view('backend.laporan.laporanIsu.index', ['hoax' => $laphoax]);
    }

    public function add()
    {
        return view('backend.laporan.laporanIsu.add-laporan');
    }
}
