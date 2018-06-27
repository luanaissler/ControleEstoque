@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Quantidade</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produtoestoque.index') }}">Quantidade</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('produtoestoque.update', $produtoestoque) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="produtoSelect">Produto</label>
                    <select name="id_produto" class="form-control" id="produtoSelect">
                        <option value="empty">Selecione um produto</option>
                        @foreach($produtos as $produto)
                            @if($produtoestoque->id_produto == $produto->id)
                                <option value="{{ $produto->id }}" selected>{{ $produto->nome }}</option>
                            @else
                                <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="estoqueSelect">Estoque</label>
                    <select name="id_estoque" class="form-control" id="estoqueSelect">
                        <option value="empty">Selecione um estoque</option>
                        @foreach($estoques as $estoque)
                            @if($produtoestoque->id_estoque == $estoque->id)
                                <option value="{{ $estoque->id }}" selected>{{ $estoque->nome }}</option>
                            @else
                                <option value="{{ $estoque->id }}">{{ $estoque->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="text">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ $produtoestoque->quantidade }}">
                </div>


                <button class="btn btn-info">Editar</button>
            </form>
        </div>
    </div>

    @endsection