<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SolicitacaoDemutranController; // A ordem correta da declaração do controller

// Rota principal, que retorna a view 'welcome'
Route::get('/', function () {
    return view('welcome');
});

// Rotas para o formulário de solicitação
Route::get('/solicitacao/create', [SolicitacaoDemutranController::class, 'create']);
Route::post('/solicitacao', [SolicitacaoDemutranController::class, 'store']);