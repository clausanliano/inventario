<?php

use App\Http\Controllers\FabricanteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\TipoServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::resource('fabricante', FabricanteController::class)->except(['create', 'edit'])->middleware('auth:sanctum');
Route::resource('fabricante', FabricanteController::class)->except(['create', 'edit']);
Route::resource('fornecedor', FornecedorController::class)->except(['create', 'edit']);
Route::resource('tiposervico', TipoServicoController::class)->except(['create', 'edit']);
Route::resource('servico', ServicoController::class)->except(['create', 'edit']);
