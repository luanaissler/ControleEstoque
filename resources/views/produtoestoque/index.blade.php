@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="page-header">Quantidade</h1>
        <p>
            <a class="btn btn-info" href="{{route('produtoestoque.create')}}">Adicionar</a>
        </p>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Estoque</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtoestoque as $produtoestoque)
                    <tr>
                        <th>
                            <a href="{{ route('produtoestoque.show', $produtoestoque->id  ) }}">
                                {{ $produtoestoque->id }}
                            </a>
                        </th>

                        <td>
                            @foreach($estoques as $estoque)
                                @if($estoque->id == $produtoestoque->id_estoque)
                                    {{ $estoque->nome }}
                                @endif
                            @endforeach
                        </td>

                        <td>
                            @foreach($produtos as $produto)
                                @if($produto->id == $produtoestoque->id_produto)
                                    {{ $produto->nome }}
                                @endif
                            @endforeach
                        </td>

                        <td>
                            {{ $produtoestoque->quantidade }}
                        </td>

                        <td>
                            <form action="{{ route('produtoestoque.edit', $produtoestoque->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="GET">
                                <button class="btn btn-info">
                                    Editar
                                </button>
                            </form>
                            <form action="{{ route('produtoestoque.destroy', $produtoestoque->id) }}" method="POST">
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
    </div>

@endsection