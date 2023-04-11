@extends('base.page')
@section('page_name', 'Home')

@section('page_content')
    <h4><b>Consulta de Cliente</b> <a href="{{ route('novoCliente') }}" class="btn btn-success btn-sm">Adicionar Cliente</a></h4>
    <p>Aqui você poderá ver a listagem de todos clientes cadastrados no sistema.</p>

    <div class="mt-5 mb-5 card">
        <div class="card-body table-responsive">
            <table class="table">
                <thead>
                    <th></th>
                    <th class="filtro">Cliente</th>
                    <th class="filtro">CPF</th>
                    <th class="filtro">Data de Nascimento</th>
                    <th class="filtro">Estado</th>
                    <th class="filtro">Cidade</th>
                    <th class="filtro">Sexo</th>
                </thead>
                <tbody>
                    @foreach ($clientes as $cli)
                        <tr>
                            <td>
                                <a class="btn btn-danger btn-sm rounded" href="{{ route('deleteCliente', ['id' => $cli['id']]) }}">Excluir</a>
                                <a class="btn btn-primary btn-sm rounded" href="{{ route('editarCliente', ['id' => $cli['id']]) }}">Editar</a>
                            </td>
                            <td>{{ $cli['nome'] }}</td>
                            <td>{{ $cli['cpf'] }}</td>
                            <td>{{ Carbon\Carbon::createFromFormat('Y-m-d', $cli['data_nascimento'])->format('d/m/Y') }}</td>
                            <td>{{ $cli['estado'] }}</td>
                            <td>{{ $cli['cidade'] }}</td>
                            <td>{{ $cli['sexo'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection