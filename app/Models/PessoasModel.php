<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class PessoasModel extends Model
{
    /**
     * Função responsavel por trazer os cliente do banco de dados
    */
    public static function getClientes() {
        return DB::table('pessoas')
            ->get();
    } 


    /**
     * Função responsavel por adicionar um cliente ao banco de dados
     */
    public static function newCliente($cliente) {
        try { 
            DB::table('pessoas')
                ->insert($cliente);
            
            return true;
        } catch ( QueryException $e ) {
            return $e->errorInfo[1];
        }
    }


    /**
     * Função responsavel por remover um cliente ao banco de dados
     */
    public static function rmCliente($id_cliente) {
        try { 
            DB::table('pessoas')
                ->where('id', '=', $id_cliente)
                ->delete();
            
            return true;
        } catch ( QueryException $e ) {
            return $e->errorInfo[1];
        }
    }


    /**
     * Função responsavel por dar update no cliente 
    */
    public static function saveCliente($fields, $id) {
        try { 
            DB::table('pessoas')
                ->where('id', '=', $id)
                ->update($fields);
            
            return true;
        } catch ( QueryException $e ) {
            return $e->errorInfo[1];
        }
    }


    /**
     * Função responsavel por pesquisar um cliente no banco de dados 
    */
    public static function searchCliente($id) {
        try { 
            return DB::table('pessoas')
                ->where('id', '=', $id)
                ->get();
        } catch ( QueryException $e ) {
            return null;
        }
    } 
}
