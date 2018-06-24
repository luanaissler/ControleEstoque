@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Produto</h1>
        <div class="panel-body">
            <p><b>Id: </b>{{ $produto->id }}</p>
            <p><b>Usuário: </b>{{ $produto->user->name }}</p>
            <p><b>Texto: </b>{{ $produto->text }}</p>
            <p><b>Criada: </b>{{ $produto->created_at }}</p>
            <p><b>Alterada: </b>{{ $produto->updated_at  }}</p>
        </div>
    </div>
@endsection
