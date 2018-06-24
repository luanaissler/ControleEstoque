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
            @foreach($fornecedores as $fornecedor)
                @if($fornecedor->id == $produto->id_fornecedor)
                    <p><b>Fornecedor: </b>{{ $fornecedor->nome }}</p>
                @endif
            @endforeach
            @foreach($estoques as $estoque)
                @if($estoque->id == $produto->id_estoque)
                    <p><b>Estoque: </b>{{ $estoque->nome }}</p>
                @endif
            @endforeach
            <p><b>Nome: </b>{{ $produto->nome }}</p>
            <p><b>Descrição: </b>{{ $produto->descricao }}</p>
            <p><b>Valor: </b>{{ $produto->valor }}</p>
            <p><b>Criada: </b>{{ $produto->created_at }}</p>
            <p><b>Alterada: </b>{{ $produto->updated_at  }}</p>
        </div>
        <a href="{{ route('produto.index') }}">Voltar</a>
    </div>
@endsection