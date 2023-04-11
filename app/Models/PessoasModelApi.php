<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PessoasModelApi extends Model
{
    /**
     * Função responsavel por trazer os cliente do banco de dados da API
    */
    public static function getClientesApi() {
        http_response_code(200);
        return response()->json((object) PessoasModel::getClientes());
    }
}

