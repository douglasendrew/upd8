<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('pessoas')->insert(
            [
                [
                    'cpf' => '123.456.789-00',
                    'nome' => 'João Silva',
                    'data_nascimento' => '1990-01-01',
                    'sexo' => 'M',
                    'endereco' => 'Rua A, 123',
                    'estado' => 'SP',
                    'cidade' => 'São Paulo',
                ],
                [
                    'cpf' => '987.654.321-00',
                    'nome' => 'Maria Souza',
                    'data_nascimento' => '1985-05-10',
                    'sexo' => 'F',
                    'endereco' => 'Rua B, 456',
                    'estado' => 'RJ',
                    'cidade' => 'Rio de Janeiro',
                ],
                [
                    'cpf' => '111.222.333-44',
                    'nome' => 'Pedro Oliveira',
                    'data_nascimento' => '1980-12-25',
                    'sexo' => 'M',
                    'endereco' => 'Rua C, 789',
                    'estado' => 'MG',
                    'cidade' => 'Belo Horizonte',
                ],
                [
                    'cpf' => '555.666.777-88',
                    'nome' => 'Mariana Santos',
                    'data_nascimento' => '1995-07-20',
                    'sexo' => 'F',
                    'endereco' => 'Rua D, 321',
                    'estado' => 'RS',
                    'cidade' => 'Porto Alegre',
                ],
                [
                    'cpf' => '222.333.444-55',
                    'nome' => 'Carlos Pereira',
                    'data_nascimento' => '1988-03-15',
                    'sexo' => 'M',
                    'endereco' => 'Rua E, 456',
                    'estado' => 'SP',
                    'cidade' => 'São Paulo',
                ],
                [
                    'cpf' => '999.888.777-66',
                    'nome' => 'Juliana Santos',
                    'data_nascimento' => '1992-11-30',
                    'sexo' => 'F',
                    'endereco' => 'Rua F, 789',
                    'estado' => 'SC',
                    'cidade' => 'Florianópolis',
                ],
                [
                    'cpf' => '777.666.555-44',
                    'nome' => 'Fernando Alves',
                    'data_nascimento' => '1982-09-05',
                    'sexo' => 'M',
                    'endereco' => 'Rua G, 123',
                    'estado' => 'PR',
                    'cidade' => 'Curitiba',
                ],
                [
                    'cpf' => '444.555.666-77',
                    'nome' => 'Ana Oliveira',
                    'data_nascimento' => '1998-04-02',
                    'sexo' => 'F',
                    'endereco' => 'Rua H, 456',
                    'estado' => 'SP',
                    'cidade' => 'São Paulo',
                ]
            ]);
    }
}
