<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class,'home'])->name('site.home');
Route::get('/valores',[MenuController::class,'valores'])->name('site.valores');
Route::get('/proposito',[MenuController::class,'proposito'])->name('site.proposito');
Route::get('/transparencia', [MenuController::class,'transparencia'])->name('site.transparencia');
Route::get('/codigo', [MenuController::class,'codigo'])->name('site.codigo');
Route::get('/responsibilidade', [MenuController::class,'codigo'])->name('site.responsibilidade');

// Route::get('/equipa', [MenuController::class,'codigo'])->name('site.responsibilidade');

Route::get('/contact', function () {
    return view('site.contact');
});


