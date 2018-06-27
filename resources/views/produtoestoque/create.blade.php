@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Quantidade Produto</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produtoestoque.index') }}">Quantidade</a></li>
            <li class="breadcrumb-item active">Enviar</li>
        </ol>
        <div class="table-responsive">
            <form method="post" action="{{ route('produtoestoque.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="estoqueSelect">Estoque</label>
                    <select name="id_estoque" class="form-control" id="estoqueSelect">
                        <option value="empty">Selecione um Estoque</option>
                        @foreach($estoque as $estoque)
                            <option value="{{ $estoque->id }}">{{ $estoque->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="produtoSelect">Produto</label>
                    <select name="id_produto" class="form-control" id="produtoSelect">
                        <option value="empty">Selecione um Produto</option>
                        @foreach($produto as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="text">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Quantidade">
                </div>
                <button class="btn btn-info">Enviar</button>

            </form>
        </div>

    </div>

@endsection
