<?php

namespace App\Http\Controllers;

use App\Models\Despesas;
use Illuminate\Http\Request;

class DespesasController extends Controller
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
        $despesas = Despesas::all();
        return view('despesa.index', compact('despesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('despesa.add');
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

        $despesas = new Despesas();
        $despesas->nome = $request->nome;
        $despesas->obs = $request->obs;
        $despesas->estado = 1;
        $despesas->save();
        if ($despesas->save()) {
            return redirect('/despesa')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/despesa')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Despesas $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Despesas $cliente) {
        return view('despesas.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Despesas $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $despesas->nome = $request->nome;
        $despesas->obs = $request->obs;
        $despesas->save();
        if ($despesas->save()) {
            return redirect('/despesa')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/despesa')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Despesas $cliente) {
        $despesas->estado = 0;
        $despesas->save();
        if ($despesas->save()) {
            return redirect('/despesa')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/despesa')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
