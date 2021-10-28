<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
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
        $clientes = Clientes::where('estado', 1)->get();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('clientes.add');
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

        $clientes = new Clientes();
        $clientes->nome = $request->nome;
        $clientes->obs = $request->obs;
        $clientes->estado = 1;
        $clientes->save();
        if ($clientes->save()) {
            return redirect('/clientes')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente) {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $clientes->nome = $request->nome;
        $clientes->obs = $request->obs;
        $clientes->save();
        if ($clientes->save()) {
            return redirect('/clientes')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $cliente) {
        $clientes->estado = 0;
        $clientes->save();
        if ($clientes->save()) {
            return redirect('/clientes')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
