@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Novo Produto</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produto.index') }}">Produtos</a></li>
            <li class="breadcrumb-item active">Enviar</li>
        </ol>
        <div class="table-responsive">
            <form method="post" action="{{ route('produto.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="text">Descrição</label>
                    <textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
                </div>
                <div class="form-group">
                    <label for="text">Valor</label>
                    <input type="number" class="form-control" name="valor" placeholder="Valor">
                </div>
                <button class="btn btn-info">Enviar</button>

            </form>
        </div>

    </div>

@endsection
