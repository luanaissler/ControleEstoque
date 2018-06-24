@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Fornecedores</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Endereço</th>
                    <th>Contato</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fornecedores as $fornecedor)
                    <tr>
                        <th><a href="{{ route('fornecedor.show', $fornecedor->id  ) }}">
                                {{ $fornecedor->id }}
                            </a>
                        </th>

                        <td>{{ $fornecedor->nome }}</td>
                        <td>{{ $fornecedor->cidade }}</td>
                        <td>{{ $fornecedor->endereco }}</td>
                        <td>{{ $fornecedor->contato }}</td>
                        <td>
                            <form action="{{ route('fornecedor.edit', $fornecedor->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('fornecedor.destroy', $fornecedor->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?')">
                                    Excluir
                                </button>
                            </form>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <p>
            <a class="btn btn-info" href="{{route('fornecedor.create')}}">Adicionar</a>
        </p>
    </div>

@endsection