<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\front\HalamanUtamaController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\GebermasController;
use App\Http\Controllers\back\DakwahController;
use App\Http\Controllers\back\MuslimMedicalController;
use App\Http\Controllers\back\SarfkamController;
use App\Http\Controllers\Auth\AuthController;

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

// --------------------- BackEnd Website
Route::get('/admin', [DashboardController::class, 'index'])->name('admin')->middleware('auth');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('gebermas', GebermasController::class)->names([
        'index' => 'admin.gebermas.index',
        'create' => 'admin.gebermas.create',
        'store' => 'admin.gebermas.store',
        'edit' => 'admin.gebermas.edit',
        'update' => 'admin.gebermas.update',
        'destroy' => 'admin.gebermas.destroy', // Make sure this is here
    ]);
});
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('dakwah', DakwahController::class)->names([
        'index' => 'admin.dakwah.index',
        'create' => 'admin.dakwah.create',
        'store' => 'admin.dakwah.store',
        'edit' => 'admin.dakwah.edit',
        'update' => 'admin.dakwah.update',
        'destroy' => 'admin.dakwah.destroy',
    ]);
});
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('muslim_medical', MuslimMedicalController::class)->names([
        'index' => 'admin.muslim_medical.index',
        'create' => 'admin.muslim_medical.create',
        'store' => 'admin.muslim_medical.store',
        'edit' => 'admin.muslim_medical.edit',
        'update' => 'admin.muslim_medical.update',
        'destroy' => 'admin.muslim_medical.destroy',
    ]);
});
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('sarfkam', SarfkamController::class)->names([
        'index' => 'admin.sarfkam.index',
        'create' => 'admin.sarfkam.create',
        'store' => 'admin.sarfkam.store',
        'edit' => 'admin.sarfkam.edit',
        'update' => 'admin.sarfkam.update',
        'destroy' => 'admin.sarfkam.destroy',
    ]);
});



// --------------------- Login & Register Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
