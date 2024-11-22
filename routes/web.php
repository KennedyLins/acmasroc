<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class,'home'])->name('site.home');
Route::get('/quemSomos', [MenuController::class,'quemsomos'])->name('site.home.quemsomos');
Route::get('/valores',[MenuController::class,'valores'])->name('site.home.valores');
Route::get('/proposito',[MenuController::class,'proposito'])->name('site.home.proposito');
Route::get('/transparencia', [MenuController::class,'transparencia'])->name('site.home.transparencia');
Route::get('/codigo', [MenuController::class,'codigo'])->name('site.home.codigo');
Route::get('/responsibilidade', [MenuController::class,'responsabilidade'])->name('site.home.responsibilidade');

Route::get('/equipa', [MenuController::class,'equipa'])->name('site.equipa');

Route::group(['prefix' => 'comunicacao'], function () {
    //Route::get('/', [MenuController::class,'comunicacao'])->name('site.comunicacao');
    Route::get('/noticias', [MenuController::class,'comunicacao_noticias'])->name('site.comunicacao.noticias');
    Route::get('/newsletter', [MenuController::class,'comunicacao_newsletter'])->name('site.comunicacao.newsletter');
});


Route::group(['prefix' => 'servicos'], function () {
    Route::get('/', [MenuController::class,'servicos'])->name('site.servicos');
    Route::get('/auditoria', [MenuController::class,'servicos_auditoria'])->name('site.servicos.auditoria');
    Route::get('/fiscalidade', [MenuController::class,'servicos_fiscalidade'])->name('site.servicos.fiscalidade');
    Route::get('/avaliacao', [MenuController::class,'servicos_avaliacao'])->name('site.servicos.avaliacao');
    Route::get('/formacao', [MenuController::class,'servicos_formacao'])->name('site.servicos.formacao');
    Route::get('/consultoria', [MenuController::class,'servicos_consultoria'])->name('site.servicos.consultoria');
});




Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [MenuController::class,'contact'])->name('site.contact');
});

// Route::get('/contact', function () {
//     return view('site.contact');
// });


