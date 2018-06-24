@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Criar Fornecedor</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('fornecedor.index') }}">Fornecedores</a></li>
            <li class="breadcrumb-item active">Criar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('fornecedor.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="text">Cidade</label>
                    <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                </div>

                <div class="form-group">
                    <label for="text">Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                </div>

                <div class="form-group">
                    <label for="text">Contato</label>
                    <input type="text" class="form-control" name="contato" placeholder="Contato">
                </div>

                <button class="btn btn-info">Enviar</button>
            </form>
        </div>

    </div>
@endsection