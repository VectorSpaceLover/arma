<?php

namespace App\Http\Controllers;

use App\Models\Licenciamento;
use Illuminate\Http\Request;

class LicenciamentoController extends Controller
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
        $licenciamentos = Licenciamento::all();
        return view('licenciamento.index', compact('licenciamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('licenciamento.add');
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

        $licenciamentos = new Licenciamento();
        $licenciamentos->nome = $request->nome;
        $licenciamentos->obs = $request->obs;
        $licenciamentos->estado = 1;
        $licenciamentos->save();
        if ($licenciamentos->save()) {
            return redirect('/licenciamento')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/licenciamento')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Licenciamento $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Licenciamento $cliente) {
        return view('licenciamentos.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licenciamento $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $licenciamentos->nome = $request->nome;
        $licenciamentos->obs = $request->obs;
        $licenciamentos->save();
        if ($licenciamentos->save()) {
            return redirect('/licenciamento')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/licenciamento')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenciamento $cliente) {
        $licenciamentos->estado = 0;
        $licenciamentos->save();
        if ($licenciamentos->save()) {
            return redirect('/licenciamento')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/licenciamento')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
