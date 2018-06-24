@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Editar Fornecedor</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('fornecedor.index') }}">Fornecedores</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('fornecedor.update', $fornecedor) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $fornecedor->nome }}">

                    <div class="form-group">
                        <label for="text">Cidade</label>
                        <input type="text" class="form-control" name="cidade" placeholder="Cidade" value="{{ $fornecedor->cidade }}">
                    </div>
                    <div class="form-group">
                        <label for="text">Endereço</label>
                        <input type="text" class="form-control" name="endereco" placeholder="Endereco" value="{{ $fornecedor->endereco }}">
                    </div>
                    <div class="form-group">
                        <label for="text">Contato</label>
                        <input type="text" class="form-control" name="contato" placeholder="contato" value="{{ $fornecedor->contato }}">
                    </div>
                    <button class="btn btn-info">Salvar</button>
            </form>
        </div>
    </div>
@endsection