<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HalamanUtamaController; 
use App\Http\Controllers\back\DashboardController; 

// --------------------- FrontEnd Website

Route::get('/', [HalamanUtamaController::class, 'index']);

// Menu Dakwah
Route::get('/dakwah', [HalamanUtamaController::class, 'dakwah']);

// Menu Gebermas
Route::get('/gebermas', [HalamanUtamaController::class, 'gebermas'])->name('gebermas');

Route::get('/gebermas/{id}', [HalamanUtamaController::class, 'gebermasdetail'])->name('gebermas.detail');

// Menu Muslim Medical
Route::get('/muslim-medical', [HalamanUtamaController::class, 'muslimMedical']);

// Menu Sar Fkam
Route::get('/sar-fkam', [HalamanUtamaController::class, 'sarFkam']);

// Menu Sejarah
Route::get('/sejarah', [HalamanUtamaController::class, 'sejarah'])->name('sejarah');

// Menu Team
Route::get('/team', [HalamanUtamaController::class, 'team']);

// --------------------- FrontEnd Website End

// --------------------- BackEnd Website
Route::get('/admin', [DashboardController::class, 'index']);

// --------------------- BackEnd Website End