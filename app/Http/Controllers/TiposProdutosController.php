<?php

namespace App\Http\Controllers;

use App\Models\TiposProdutos;
use Illuminate\Http\Request;

class TiposProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $tipos_produtos = TiposProdutos::all();
        return view('tiposproduto.index', compact('tipos_produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tiposproduto.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);

        $tipos_produtos = new TiposProdutos();
        $tipos_produtos->nome = $request->nome;
        $tipos_produtos->obs = $request->obs;
        $tipos_produtos->estado = 1;
        $tipos_produtos->save();
        if ($tipos_produtos->save()) {
            return redirect('/tiposproduto')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/tiposproduto')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(TiposProdutos $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposProdutos $cliente) {
        return view('tipos_produtos.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposProdutos $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $tipos_produtos->nome = $request->nome;
        $tipos_produtos->obs = $request->obs;
        $tipos_produtos->save();
        if ($tipos_produtos->save()) {
            return redirect('/tiposproduto')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/tiposproduto')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposProdutos $cliente) {
        $tipos_produtos->estado = 0;
        $tipos_produtos->save();
        if ($tipos_produtos->save()) {
            return redirect('/tiposproduto')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/tiposproduto')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
