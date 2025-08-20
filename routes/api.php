<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\ArquivoReadController;

Route::post('/arquivo/import', [ArquivoController::class, 'import']);
// Define a rota para importar arquivos usando o ArquivoController  


Route::get('/arquivos', [ArquivoReadController::class, 'index']);       // lista arquivos
Route::get('/arquivos/{id}', [ArquivoReadController::class, 'show']);  // mostra dados de um arquivo