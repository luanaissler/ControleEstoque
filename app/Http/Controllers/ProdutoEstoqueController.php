<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estoque;
use App\Produto;
use App\ProdutoEstoque;

class ProdutoEstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtoestoque.index', [
            'produtoestoque' => ProdutoEstoque::orderBy('id')->get(),
            'estoques' => Estoque::all(),
            'produtos' => Produto::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtoestoque.create', [
            'estoque' => Estoque::orderBy('nome')->get(),
            'produto' => Produto::orderBy('nome')->get()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtoestoque = new ProdutoEstoque($request->all());
        if ($produtoestoque->save()) {
            return redirect()->route('produtoestoque.index')->with('message', 'Vendedor criado com sucesso!');
        } else {
            return redirect()->route('produtoestoque.index')->with('message', 'Erro na criação do vendedor!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoEstoque $produtoestoque)
    {
        return view('produtoestoque.show', [
            'produtoestoque' => $produtoestoque
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoEstoque $produtoestoque)
    {
        return view('produtoestoque.edit', array(
            'produtoestoque' => $produtoestoque,
            'produtos' => Produto::all(),
            'estoques' => Estoque::all()
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoEstoque $produtoestoque)
    {
        $produtoestoque->update($request->all());
        return redirect()->route('produtoestoque.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoEstoque $produtoestoque)
    {
        $produtoestoque->delete();
        return redirect()->route('produtoestoque.index');
    }
}
