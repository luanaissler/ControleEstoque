@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Criar Estoque</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('estoque.index') }}">Estoques</a></li>
            <li class="breadcrumb-item active">Criar</li>
        </ol>

        <div class="table-responsive">
            <form method="post" action="{{ route('estoque.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="text">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                </div>

                <button class="btn btn-info">Enviar</button>
            </form>
        </div>

    </div>
@endsection