@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Quantidade</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produtoestoque.index') }}">Quantidade</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $produtoestoque->id }}</p>
            <p><b>Estoque: </b>{{ $produtoestoque->id_estoque }}</p>
            <p><b>Produto: </b>{{ $produtoestoque->id_produto }}</p>
            <p><b>Quantidade: </b>{{ $produtoestoque->quantidade }}</p>
        </div>

    </div>
@endsection