<?php

use App\Models\PessoasModel;
use App\Models\PessoasModelApi;
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

Route::prefix('/v1')->group(function() {
    Route::get('/clientes/lista', [PessoasModelApi::class, 'getClientesApi'])->name('api:ListaClientes');
});
