@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Editar Estoque</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('estoque.index') }}">Estoques</a></li>
            <li class="breadcrumb-item active">Editar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('estoque.update', $estoque) }}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" value="{{ $estoque->nome }}">
                </div>
        </div>
        <button class="btn btn-info">Salvar</button>
        </form>
    </div>
    </div>
@endsection