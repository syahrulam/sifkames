<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gebermas;

class GebermasController extends Controller
{
    public function index()
    {
         $activities = Gebermas::all();
         return view('gebermas.index', compact('activities'));
    }
}
