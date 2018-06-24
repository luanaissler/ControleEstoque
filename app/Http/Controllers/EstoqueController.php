<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estoque;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estoque.index', ['estoque' => Estoque::orderBy('nome')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estoque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estoque = new Estoque($request->all());
        if ($estoque->save()) {
            return redirect()->route('estoque.index')->with('message', 'Estoque criado com sucesso!');
        } else {
            return redirect()->route('estoque.index')->with('message', 'Erro na criação do estoque!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estoque $estoque)
    {
        return view('estoque.edit', array('estoque' => $estoque));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estoque $estoque)
    {
        $estoque->update($request->all());
        return redirect()->route('estoque.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estoque $estoque)
    {
        $estoque->delete();
        return redirect()->route('estoque.index');
    }
}
