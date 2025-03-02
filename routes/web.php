<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\front\HalamanUtamaController;
use App\Http\Controllers\back\DashboardController;
use App\Http\Controllers\back\GebermasController;
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
        'destroy' => 'admin.gebermas.destroy',
    ]);
});

// --------------------- Login & Register Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
