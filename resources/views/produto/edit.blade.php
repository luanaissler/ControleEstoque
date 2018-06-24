@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Editar Produto</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>
        <div class="table-responsive">
            <form method="post" action="{{ route('produto.update', $produto) }}">
                {{ csrf_field() }}

                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{$produto->nome}}">
                </div>
                <div class="form-group">
                    <label for="text">Descrição</label>
                    <input type="text" name="text" class="form-control" placeholder="Texto"   value="{{ $produto->descricao }}">
                </div>
                <div class="form-group">
                    <label for="text">Valor</label>
                    <input type="number" class="form-control" name="valor" placeholder="Valor" value="{{$produto->valor}}">
                </div>
                <button class="btn btn-info">Salvar</button>
            </form>

        </div>
    </div>
@endsection
