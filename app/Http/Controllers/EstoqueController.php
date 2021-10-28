<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class EstoqueController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $produto = Produtos::where('estado', 1)->get();
        return view('estoque.index', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categoria = \App\Models\Categoria::where('estado', 1)->get();

        return view('estoque.add', compact('categoria'));
    }

    public function add() {
        $categoria = \App\Models\Categoria::where('estado', 1)->get();
        return view('estoque.add', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {



        $validated = $request->validate([
            'numero' => 'string|max:50|unique:produtos',
            'marca' => 'string|max:50',
            'nome' => 'required|string|max:50',
            'municoes' => 'string|max:50',
            'calibre' => 'string|max:50',
            'carregamento' => 'string|max:50',
            'importacao' => 'string|max:50',
            'modelo' => 'string|max:50',
            'classificacao' => 'string|max:50',
            'tiros' => 'string|max:50',
            'percursao' => 'string|max:50',
            'comprimentoCano' => 'string|max:50',
            'mecanismo' => 'string|max:50',
            'categoria' => 'required|string|max:50',
            'preco' => 'required|string|max:50',
            'quantidade_stoque' => 'required|string|max:50',
        ]);


        $produto = new Produtos;
        $produto->nome = $request->nome;
        $produto->validade = $request->validade;
        $produto->numero = $request->numero;
        $produto->marca = $request->marca;
        $produto->municoes = $request->municoes;
        $produto->calibre = $request->calibre;
        $produto->carregamento = $request->carregamento;
        $produto->origem_importacao = $request->importacao;
        $produto->modelo = $request->modelo;
        $produto->classificacao = $request->classificacao;
        $produto->nr_tiros = $request->tiros;
        $produto->percussao = $request->percursao;
        $produto->comprimento = $request->comprimentoCano;
        $produto->mecanismo = $request->mecanismo;
        $produto->categoria_id = $request->categoria;
        $produto->preco = $request->preco;
        $produto->estado = 1;
        $produto->user_id = auth()->id();
        $produto->quantidade_stoque = $request->quantidade_stoque;
        $produto->save();

        if ($produto->save()) {
            return redirect('/estoque')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/estoque')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $produtos) {
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produto) {
        $categoria = \App\Models\Categoria::where('estado', 1)->get();
        return view('estoque.edit', compact('produto', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produto) {

        $validated = $request->validate([
            'marca' => 'string|max:50',
            'nome' => 'required|string|max:50',
            'municoes' => 'string|max:50',
            'calibre' => 'string|max:50',
            'carregamento' => 'string|max:50',
            'importacao' => 'string|max:50',
            'modelo' => 'string|max:50',
            'classificacao' => 'string|max:50',
            'tiros' => 'string|max:50',
            'percursao' => 'string|max:50',
            'comprimentoCano' => 'string|max:50',
            'mecanismo' => 'string|max:50',
            'categoria' => 'required|string|max:50',
            'preco' => 'required|string|max:50',
            'quantidade_stoque' => 'required|string|max:50',
        ]);

        $numeroProduto = Produtos::all();
        foreach ($numeroProduto as $numeroProdutoLinha) {
            if ($request->numero == $numeroProdutoLinha->numero and $request->id != $numeroProdutoLinha->id) {
                return redirect()->back()->with(['mensagem' => 'Falha em actualizar: O número refererência já existe no sistema ']);
            }
        }
        $produto->nome = $request->nome;
        $produto->validade = $request->validade;
        $produto->numero = $request->numero;
        $produto->marca = $request->marca;
        $produto->municoes = $request->municoes;
        $produto->calibre = $request->calibre;
        $produto->carregamento = $request->carregamento;
        $produto->origem_importacao = $request->importacao;
        $produto->modelo = $request->modelo;
        $produto->classificacao = $request->classificacao;
        $produto->nr_tiros = $request->tiros;
        $produto->percussao = $request->percursao;
        $produto->comprimento = $request->comprimentoCano;
        $produto->mecanismo = $request->mecanismo;
        $produto->categoria_id = $request->categoria;
        $produto->preco = $request->preco;
        $produto->user_id = auth()->id();
        $produto->quantidade_stoque = $request->quantidade_stoque;
        $produto->save();
        if ($produto->save()) {
            return redirect('/estoque')->with(['mensagem' => 'Actualizado com sucesso']);
        } else {
            return redirect('/estoque')->with(['mensagem' => 'Falha ao Actualizar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $produto) {
        $produto->estado = 0;
        $produto->save();
        if ($produto->save()) {
            return redirect('/estoque')->with(['mensagem' => 'Deletado com sucesso']);
        } else {
            return redirect('/estoque')->with(['mensagem' => 'Falha ao Deletar']);
        }
    }

}
