<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\MaterialDidaticoController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\ResultadoFaseController;
use App\Http\Controllers\LojaController;
use App\Http\Controllers\ConquistaController;

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
    Route::get('/fases/{id}', [FaseController::class, 'show'])->name('fases.show');
    Route::get('/loja', [LojaController::class, 'index'])->name('loja.index');
    Route::post('/fases/{id}/responder', [FaseController::class, 'responder'])->name('fases.responder');
    Route::post('/fases/{fase}/finalizar', [ResultadoFaseController::class, 'finalizar'])->name('fases.finalizar');
    Route::get('/loja', [App\Http\Controllers\LojaController::class, 'index'])->name('loja.index');
    Route::post('/loja/comprar/{avatar}', [App\Http\Controllers\LojaController::class, 'comprar'])->name('loja.comprar');
    Route::get('/colecao', [App\Http\Controllers\ColecaoController::class, 'index'])->name('colecao.index');
    Route::post('/colecao/equipar/{avatar}', [App\Http\Controllers\ColecaoController::class, 'equipar'])->name('colecao.equipar');
    Route::get('/conquistas', [ConquistaController::class, 'index'])->name('conquistas.index');
});

Route::middleware(['auth', 'professor'])->group(function () {
    Route::get('/materiaisdidaticos/create/{modulo_id}', [MaterialDidaticoController::class, 'create'])->name('materiaisdidaticos.create');
    Route::post('/materiaisdidaticos', [MaterialDidaticoController::class, 'store'])->name('materiaisdidaticos.store');
});

require __DIR__.'/auth.php';
