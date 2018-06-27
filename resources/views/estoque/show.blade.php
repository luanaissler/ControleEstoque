@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Estoques</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('estoque.index') }}">Estoque</a></li>
            <li class="breadcrumb-item active">Detalhes</li>
        </ol>

        <div class="panel-body">
            <p><b>Id: </b>{{ $estoque->id }}</p>
            <p><b>Nome: </b>{{ $estoque->nome }}</p>

    </div>
@endsection