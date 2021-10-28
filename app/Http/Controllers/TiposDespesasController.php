<?php

namespace App\Http\Controllers;

use App\Models\TiposDespesas;
use Illuminate\Http\Request;

class TiposDespesasController extends Controller
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
        $tipo_despesas = TiposDespesas::all();
        return view('tipodespesa.index', compact('tipo_despesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tipodespesa.add');
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

        $tipo_despesas = new TiposDespesas();
        $tipo_despesas->nome = $request->nome;
        $tipo_despesas->obs = $request->obs;
        $tipo_despesas->estado = 1;
        $tipo_despesas->save();
        if ($tipo_despesas->save()) {
            return redirect('/tipodespesa')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/tipodespesa')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(TiposDespesas $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposDespesas $cliente) {
        return view('tipo_despesas.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposDespesas $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $tipo_despesas->nome = $request->nome;
        $tipo_despesas->obs = $request->obs;
        $tipo_despesas->save();
        if ($tipo_despesas->save()) {
            return redirect('/tipodespesa')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/tipodespesa')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposDespesas $cliente) {
        $tipo_despesas->estado = 0;
        $tipo_despesas->save();
        if ($tipo_despesas->save()) {
            return redirect('/tipodespesa')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/tipodespesa')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
