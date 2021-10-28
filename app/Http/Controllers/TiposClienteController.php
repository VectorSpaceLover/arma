<?php

namespace App\Http\Controllers;

use App\Models\TiposCliente;
use Illuminate\Http\Request;

class TiposClienteController extends Controller
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
        $tipo_clientes = TiposCliente::all();
        return view('tipocliente.index', compact('tipo_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('tipocliente.add');
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

        $tipo_clientes = new TiposCliente();
        $tipo_clientes->nome = $request->nome;
        $tipo_clientes->obs = $request->obs;
        $tipo_clientes->estado = 1;
        $tipo_clientes->save();
        if ($tipo_clientes->save()) {
            return redirect('/tipocliente')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/tipocliente')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(TiposCliente $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(TiposCliente $cliente) {
        return view('tipo_clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposCliente $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $tipo_clientes->nome = $request->nome;
        $tipo_clientes->obs = $request->obs;
        $tipo_clientes->save();
        if ($tipo_clientes->save()) {
            return redirect('/tipocliente')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/tipocliente')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposCliente $cliente) {
        $tipo_clientes->estado = 0;
        $tipo_clientes->save();
        if ($tipo_clientes->save()) {
            return redirect('/tipocliente')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/tipocliente')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
