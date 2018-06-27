@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Produto</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>
        <div class="panel-body">
            <p><b>Id: </b>{{ $produto->id }}</p>
            <p><b>Nome: </b>{{ $produto->nome }}</p>
            <p><b>Descrição: </b>{{ $produto->descricao }}</p>
            <p><b>Valor: </b>{{ $produto->valor }}</p>
            <p><b>Criado: </b>{{ $produto->created_at }}</p>
            <p><b>Alterado: </b>{{ $produto->updated_at  }}</p>
        </div>
    </div>
@endsection
