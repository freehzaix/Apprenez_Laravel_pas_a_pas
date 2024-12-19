<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/client/add', [ClientController::class, 'create'])->name('client.create');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/clients', [ClientController::class, 'index'])->name('client.index');

Route::get('/vehicule/add', [VehiculeController::class, 'create'])->name('vehicule.create');
Route::post('/vehicule/store', [VehiculeController::class, 'store'])->name('vehicule.store');
Route::get('/vehicules', [VehiculeController::class, 'index'])->name('vehicule.index');

Route::get('/location/add', [LocationController::class, 'create'])->name('location.create');
Route::get('/locations', [LocationController::class, 'index'])->name('location.index');

// Route::redirect('/', '/login');
// Route::post();
// Route::put();
// Route::delete();