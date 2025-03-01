<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebermas;

class HalamanUtamaController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function dakwah()
    {
        return view('frontend.dakwah.index');
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
