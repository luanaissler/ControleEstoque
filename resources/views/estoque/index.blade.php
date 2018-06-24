@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Estoque</h1>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Opções</th>

                </tr>
                </thead>
                <tbody>
                @foreach($estoque as $estoque)
                    <tr>
                        <th><a href="{{ route('estoque.show', $estoque->id  ) }}">
                                {{ $estoque->id }}
                            </a>
                        </th>

                        <td>{{ $estoque->nome }}</td>
                        <td>

                            <form action="{{ route('estoque.edit', $estoque->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST">
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
            <a class="btn btn-info" href="{{route('estoque.create')}}">Adicionar</a>
        </p>
    </div>

@endsection