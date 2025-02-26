<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HalamanUtamaController; 

Route::get('/', [HalamanUtamaController::class, 'index']);
