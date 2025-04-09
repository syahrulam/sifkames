<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donasi;

class DonasiController extends Controller
{
    public function index()
    {
        $donasis = \App\Models\Donasi::all(); // Pastikan modelnya bener
        return view('backend.donasi.index', compact('donasis'));
    }
}
