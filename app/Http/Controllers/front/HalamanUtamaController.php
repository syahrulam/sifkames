<?php

namespace App\Http\Controllers\Front;

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

    // Halaman Dakwah
    public function dakwah()
    {
        $dakwah = Dakwah::all(); // Mengambil semua data dari tabel Dakwah
        return view('frontend.dakwah.index', compact('dakwah'));
    }

    public function dakwahdetail($id)
    {
        $dakwah = Dakwah::findOrFail($id); // Gunakan $dakwah agar konsisten
        return view('frontend.dakwah.detail', compact('dakwah'));
    }

    // Halaman Gebermas
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

    // Halaman Muslim Medical
    public function muslimMedical()
    {
        return view('frontend.muslim_medical.index');
    }

    // Halaman SAR FKAM
    public function sarFkam()
    {
        return view('frontend.sar_fkam.index');
    }

    // Halaman Sejarah
    public function sejarah()
    {
        return view('frontend.sejarah.index');
    }

    // Halaman Tim
    public function team()
    {
        return view('frontend.team.index');
    }
}
