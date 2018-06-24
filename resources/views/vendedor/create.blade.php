@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Criar Vendedor</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('vendedor.index') }}">Vendedores</a></li>
            <li class="breadcrumb-item active">Criar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('vendedor.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="text">Contato</label>
                    <input type="text" class="form-control" name="contato" placeholder="Contato">
                </div>

                <div class="form-group">
                    <label for="fornecedorSelect">Fornecedor</label>
                    <select name="id_fornecedor" class="form-control" id="fornecedorSelect">
                        <option value="empty">Selecione um fornecedor</option>
                        @foreach($fornecedores as $fornecedor)
                            <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-info">Enviar</button>
            </form>
        </div>

    </div>
@endsection