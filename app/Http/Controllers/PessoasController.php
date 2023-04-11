<?php

namespace App\Http\Controllers;

use App\Models\PessoasModel;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

class PessoasController extends Controller
{

    /**
     * Função responsavel por chamar e passar a listagem de clientes 
     * para a view correta.
    */
    public function homeClientes() {
        $request = Request::create('/api/v1/clientes/lista', 'GET');
        $reponse = Route::dispatch($request);
        $responseBody = json_decode($reponse->getContent(), true);

        return view('homeClientesView', ['clientes' => $responseBody]);
    }


    /**
     * Função responsavel por adicionar um novo cliente
    */
    public function addCliente(Request $request) {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'endereco' => 'required',
            'estado' => 'required',
            'cidade' => 'required'
        ]);

        $requested_data = $request->all();
        unset($requested_data['_token']);

        $request_model = PessoasModel::newCliente($requested_data);

        if($request_model === true) {
            return redirect()
                ->route('homeClientes')
                ->with('success', 'Cliente adicionado com sucesso');
        } else {
            return redirect()
                ->back()
                ->withErrors("Ocorreu um erro ao adicionar o cliente. [Error code: $request_model]")
                ->withInput($requested_data);
        }
    }


    /**
     * Função responsavel por remover cliente
    */
    public function removeCliente($id) {
        $request_model = PessoasModel::rmCliente($id);

        if($request_model === true) {
            return redirect()
                ->route('homeClientes')
                ->with('success', 'Cliente removido com sucesso');
        } else {
            return redirect()
                ->route('homeClientes')
                ->withErrors("Ocorreu um erro ao adicionar o cliente. [Error code: $request_model]");
        }
    }


    /**
     * Função responsavel por chamar a model para update 
     */
    public function udpateCliente(Request $request, $id) {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'endereco' => 'required',
            'estado' => 'required',
            'cidade' => 'required'
        ]);


        $requested_data = $request->all();
        unset($requested_data['_token']);

        $request_model = PessoasModel::saveCliente($requested_data, $id);

        if($request_model === true) {
            return redirect()
                ->route('homeClientes')
                ->with('success', 'Cliente atualizado com sucesso');
        } else {
            return redirect()
                ->back()
                ->withErrors("Ocorreu um erro ao atualizar o cliente. [Error code: $request_model]")
                ->withInput($requested_data);
        }
    }


    /**
     * Função responsavel por chamar a model e a view para edição do cliente 
     */
    public function editCliente($id) {
        $cliente_infos = PessoasModel::searchCliente($id);

        if(!empty($cliente_infos)) {
            return view('editarClienteView', ['id_cliente' => $id, 'cliente' => $cliente_infos->toArray()[0]]);
        } else {
            return abort(404);
        }
    }
}
