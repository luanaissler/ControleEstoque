@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Vendedores</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $vendedor->id }}</p>
            <p><b>Nome: </b>{{ $vendedor->nome }}</p>
            <p><b>Contato: </b>{{ $vendedor->contato }}</p>
            <p><b>Forncededor: </b>{{ $vendedor->id_fornecedor }}</p>
        </div>
        <a href="{{ route('forncededor.index') }}">Voltar</a>
    </div>
@endsection