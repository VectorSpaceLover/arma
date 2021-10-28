<?php

namespace App\Http\Controllers;

use App\Models\Faturacao;
use Illuminate\Http\Request;

class FaturacaoController extends Controller
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
        $faturacaos = Faturacao::all();
        return view('faturacao.index', compact('faturacaos'));
        // return compact('faturacaos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('faturacao.add');
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

        $faturacaos = new Faturacao();
        $faturacaos->nome = $request->nome;
        $faturacaos->obs = $request->obs;
        $faturacaos->estado = 1;
        $faturacaos->save();
        if ($faturacaos->save()) {
            return redirect('/faturacao')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/faturacao')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Faturacao $faturacaos) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\faturacaos  $faturacaos
     * @return \Illuminate\Http\Response
     */
    public function edit(Faturacao $faturacaos) {
        return view('faturacao.edit', compact('faturacaos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faturacaos  $faturacaos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faturacao $faturacaos) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $faturacaos->nome = $request->nome;
        $faturacaos->obs = $request->obs;
        $faturacaos->save();
        if ($faturacaos->save()) {
            return redirect('/faturacao')->with(['mensagem' => 'faturacaos actualizado com sucesso']);
        } else {
            return redirect('/faturacao')->with(['mensagem' => 'Falha ao Actualizar a faturacaos']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\faturacaos  $faturacaos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faturacao $faturacaos) {
        $faturacaos->estado = 0;
        $faturacaos->save();
        if ($faturacaos->save()) {
            return redirect('/faturacao')->with(['mensagem' => 'faturacaos deletado com sucesso']);
        } else {
            return redirect('/faturacao')->with(['mensagem' => 'Falha ao Deletar faturacaos']);
        }
    }
}
