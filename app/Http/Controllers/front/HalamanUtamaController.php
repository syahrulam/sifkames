<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebermas;
use App\Models\Dakwah;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function dakwah()
{
    $dakwah = Dakwah::all(); // Mengambil semua data dari tabel dakwah
    return view('frontend.dakwah.index', compact('dakwah'));
}


    public function gebermas()
    {
        $aktivitas = Gebermas::all();
        return view('frontend.gebermas.index', compact('aktivitas'));
    }

    public function gebermasdetail($id)
    {
        $aktivitas = Gebermas::findOrFail($id);
        return view('frontend.gebermas.detail', compact('aktivitas'));
    }


    public function muslimMedical()
    {
        return view('frontend.muslim_medical.index');
    }

    public function sarFkam()
    {
        return view('frontend.sar_fkam.index');
    }

    public function sejarah()
    {
        return view('frontend.sejarah.index');
    }


    public function team()
    {
        return view('frontend.team.index');
    }
}
