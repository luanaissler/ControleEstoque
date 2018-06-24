@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="page-header">Produtos</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Opção</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <th><a href="{{ route('produto.show', $produto->id  ) }}">{{ $produto->id }}</a></th>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>
                                <form action="{{ route('produto.edit', $produto->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="GET">
                                    <button class="btn btn-info">
                                        Editar
                                    </button>
                                </form>
                            <form action="{{ route('produto.destroy', $produto->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>

            <a class="btn btn-info" href="{{route('produto.create')}}">Cadastrar Produto</a>

    </div>

@endsection
