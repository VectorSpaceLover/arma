<?php

namespace App\Http\Controllers;

use App\Models\Cotacao;
use Illuminate\Http\Request;

class CotacaoController extends Controller
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
        $cotacaos = Cotacao::all();
        return view('cotacao.index', compact('cotacaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('cotacao.add');
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

        $cotacaos = new Cotacao();
        $cotacaos->nome = $request->nome;
        $cotacaos->obs = $request->obs;
        $cotacaos->estado = 1;
        $cotacaos->save();
        if ($cotacaos->save()) {
            return redirect('/cotacao')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/cotacao')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cotacao $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cotacao $cliente) {
        return view('cotacaos.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cotacao $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $cotacaos->nome = $request->nome;
        $cotacaos->obs = $request->obs;
        $cotacaos->save();
        if ($cotacaos->save()) {
            return redirect('/cotacao')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/cotacao')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cotacao $cliente) {
        $cotacaos->estado = 0;
        $cotacaos->save();
        if ($cotacaos->save()) {
            return redirect('/cotacao')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/cotacao')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
