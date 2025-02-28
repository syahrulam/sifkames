<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailGebermasController extends Controller
{
     // Menampilkan detail kegiatan berdasarkan slug
    public function show($slug)
    {
        // Jika menggunakan database
        $activity = Gebermas::where('slug', $slug)->firstOrFail();

        return view('front.gebermas.detail', compact('activity'));
    }
}
