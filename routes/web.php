<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\EndpointController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('/sites', [SiteController::class,  'index'])->name('sites.index');
    Route::get('/check', [CheckController::class,  'index'])->name('check.index');
    Route::get('/endpoint', [EndpointController::class,  'index'])->name('endpoint.index');
    
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
