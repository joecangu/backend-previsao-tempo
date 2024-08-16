<?php

use App\Http\Controllers\Api\HistoricoController;
use App\Models\Historico;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Rotas do histórico
Route::get('/historico', [HistoricoController::class, 'index']);
Route::post('/historico', [HistoricoController::class,  'salvar']);
Route::post('/consultar', [HistoricoController::class, 'consultar']);