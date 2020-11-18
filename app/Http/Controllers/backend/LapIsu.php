<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LapIsu extends Controller
{
    public function index()
    {
        return view('backend.laporanIsu');
    }
}
