<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\LojaController;

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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/modulos', [ModuloController::class, 'index'])->name('modulos.index');
    Route::get('/modulos/{id}', [ModuloController::class, 'show'])->name('modulos.show');
    Route::get('/fases', [FaseController::class, 'index'])->name('fases.index');
    Route::get('/loja', [LojaController::class, 'index'])->name('loja.index');
});

require __DIR__.'/auth.php';
