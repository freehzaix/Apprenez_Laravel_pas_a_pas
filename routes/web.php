<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

Route::get('/etudiants', [EtudiantController::class, 'index']);

// Route::redirect('/', '/login');
// Route::post();
// Route::put();
// Route::delete();