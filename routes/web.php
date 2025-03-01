<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HalamanUtamaController; 
use App\Http\Controllers\front\SejarahController; 
use App\Http\Controllers\front\TeamsController;
use App\Http\Controllers\front\GebermasController;
use App\Http\Controllers\front\DetailGebermasController;
use App\Http\Controllers\front\MuslimMedicalsController;
use App\Http\Controllers\front\DakwahsController;
use App\Http\Controllers\front\SarFkamsController;

Route::get('/', [HalamanUtamaController::class, 'index']);
Route::get('/sejarahs', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');
Route::get('/gebermas', [GebermasController::class, 'index'])->name('gebermas.index');
Route::get('/gebermas/{slug}', [DetailGebermasController::class, 'show'])->name('gebermas.detail');
Route::get('/muslim_medicals', [MuslimMedicalsController::class, 'index'])->name('muslim_medicals');
Route::get('/dakwahs', [DakwahsController::class, 'index'])->name('dakwahs');
Route::get('/sar_fkams', [SarFkamsController::class, 'index'])->name('sar_fkams');