@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Fornecedores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('fornecedor.index') }}">Fornecedores</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $fornecedor->id }}</p>
            <p><b>Nome: </b>{{ $fornecedor->nome }}</p>
            <p><b>Cidade: </b>{{ $fornecedor->cidade }}</p>
            <p><b>Endereço: </b>{{ $fornecedor->endereco }}</p>
            <p><b>Contato: </b>{{ $fornecedor->contato }}</p>
            <p><b>Criada: </b>{{ $fornecedor->created_at }}</p>
            <p><b>Alterada: </b>{{ $fornecedor->updated_at  }}</p>
        </div>

    </div>
@endsection