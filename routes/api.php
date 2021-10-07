<?php

use App\Http\Controllers\CidadeController;
use App\Http\Controllers\DescontoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GruposCidadeController;
use App\Http\Controllers\ProdutoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('grupos', GruposCidadeController::class);
Route::apiResource('cidades', CidadeController::class);
Route::apiResource('estados', EstadoController::class);
Route::apiResource('produtos', ProdutoController::class);
Route::apiResource('desconto', DescontoController::class);

