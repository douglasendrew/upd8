@extends('base.page')
@section('page_name', 'Novo Cliente')

@section('page_content')
    <h4><b>Novo Cliente</b> <a href="{{ route('homeClientes') }}" class="btn btn-primary btn-sm">Voltar</a></h4>
    <p>Aqui você poderá criar um novo cliente.</p>

    <div class="card mt-5">
        <div class="card-body">
            <form action="{{ route('addCliente') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Nome Completo</label>
                        <input type="text" name="nome" class="form-control" required value="{{ old('nome') }}">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="">CPF</label>
                        <input type="text" name="cpf" class="form-control" required value="{{ old('cpf') }}">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" class="form-control" required value="{{ old('data_nascimento') }}">
                    </div>
                    
                    <div class="col-md-4 mt-3">
                        <label for="">Sexo</label>
                        <select name="sexo" class="form-control" required>
                            <option value="">-- Selecione --</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="">Endereço</label>
                        <input type="text" name="endereco" class="form-control" required value="{{ old('endereco') }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Cidade</label>
                        <input type="text" name="cidade" class="form-control" required value="{{ old('cidade') }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Estado</label>
                        <input type="text" name="estado" class="form-control" required value="{{ old('estado') }}">
                    </div>

                    <div class="col-md-12 mt-3">
                        <button class="btn btn-success w-100">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection