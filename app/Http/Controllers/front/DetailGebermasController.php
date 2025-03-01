<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebermas;


class DetailGebermasController extends Controller
{
     // Menampilkan detail kegiatan berdasarkan slug
    public function show($slug)
    {
        $activity = Gebermas::where('slug', $slug)->firstOrFail();
        return view('gebermas.detail', compact('activity'));
    }
}
