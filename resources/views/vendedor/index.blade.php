@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Vendedores</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Contato</th>
                    <th>Fornecedor</th>
                    <th>Opcões</th>


                </tr>
                </thead>
                <tbody>
                @foreach($vendedor as $vendedor)
                    <tr>
                        <th><a href="{{ route('vendedor.show', $vendedor->id  ) }}">
                                {{ $vendedor->id }}
                            </a>
                        </th>

                        <td>{{ $vendedor->nome }}</td>
                        <td>{{ $vendedor->contato}}</td>
                        <td>{{ $vendedor->id_fornecedor }}</td>


                        <td>
                            <form action="{{ route('vendedor.edit', $vendedor->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('vendedor.destroy', $vendedor->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                    Excluir
                                </button>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <p>
            <a class="btn btn-info" href="{{route('vendedor.create')}}">Adicionar</a>
        </p>
    </div>

@endsection