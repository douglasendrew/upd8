<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PessoasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()
        ->route('homeClientes');
});

Route::prefix('/clientes')->group(function () {
    // Listagem de clientes
    Route::get('/', [PessoasController::class, 'homeClientes'])->name('homeClientes');

    // Rota para criação de um novo cliente
    Route::get('/novo', function() {
        return view('adicionarClienteView');
    })->name('novoCliente');

    // Rota para adicionar um cliente ao banco
    Route::post('/add', [PessoasController::class, 'addCliente'])->name('addCliente');

    // Rota para edição do cliente
    Route::get('/editar/{id}', [PessoasController::class, 'editCliente'])->name('editarCliente');

    // Rota para salvar as informações da edição do cliente
    Route::post('/save/{id}', [PessoasController::class, 'udpateCliente'])->name('updateCliente');

    // Rota para deletar cliente
    Route::get('/deletar/{id}', [PessoasController::class, 'removeCliente'])->name('deleteCliente');
});
