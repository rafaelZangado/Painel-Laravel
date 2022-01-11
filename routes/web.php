<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabelaController;



Route::get('/', function () {
    return view('welcome');
});


#Route::get('teste', [testeController::class,'index']);
Route::get('cadastrar', [TabelaController::class,'cadastrar'])->name('cadastrar');
Route::post('cadastrar', [TabelaController::class,'salvar'])->name('salvar');
Route::get('listar', [TabelaController::class,'listar'])->name('listar');
Route::get('editar/{id}', [TabelaController::class,'editar'])->name('editar');
Route::post('atualizar', [TabelaController::class,'atualizar'])->name('atualizar');

Route::get('deletar/{id}', [TabelaController::class,'deletar'])->name('deletar');






