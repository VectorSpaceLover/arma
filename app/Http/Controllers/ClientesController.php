<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $clientes = Clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create() {
        return view('clientes.add');
    }

    public function store(Request $request) {

        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);

        $clientes = new Clientes();
        $clientes->apelido = $request->apelido;
        $clientes->nome = $request->nome;
        $clientes->bi_dire_passporte = $request->bi_dire_passporte;
        $clientes->nuit = $request->nuit;
        $clientes->nacionalidade = $request->nacionalidade;
        $clientes->residencia = $request->residencia;
        $clientes->casa_nr = $request->casa_nr;
        $clientes->endereco = $request->endereco;
        $clientes->provincia_id = $request->provincia_id;
        $clientes->telefone = $request->telefone;
        $clientes->naturalidade = $request->naturalidade;
        $clientes->estado_civil_id = $request->estado_civil_id;
        $clientes->validade = $request->validade;
        $clientes->profissao = $request->profissao;
        $clientes->user_id = $request->user_id;
        $clientes->data_created = $request->data_created;
        $clientes->estado = $request->estado;
        $clientes->tipoCliente_id = $request->tipoCliente_id;
        $clientes->obs = $request->obs;

        $clientes->save();
        if ($clientes->save()) {
            return redirect('/clientes')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }
    
    public function show(Clientes $cliente) {
        //
    }

    public function edit(Clientes $cliente) {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Clientes $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);

        $cliente->apelido = $request->apelido;
        $cliente->nome = $request->nome;
        $cliente->bi_dire_passporte = $request->bi_dire_passporte;
        $cliente->nuit = $request->nuit;
        $cliente->nacionalidade = $request->nacionalidade;
        $cliente->residencia = $request->residencia;
        $cliente->casa_nr = $request->casa_nr;
        $cliente->endereco = $request->endereco;
        $cliente->provincia_id = $request->provincia_id;
        $cliente->telefone = $request->telefone;
        $cliente->naturalidade = $request->naturalidade;
        $cliente->estado_civil_id = $request->estado_civil_id;
        $cliente->validade = $request->validade;
        $cliente->profissao = $request->profissao;
        $cliente->user_id = $request->user_id;
        $cliente->data_created = $request->data_created;
        $cliente->estado = $request->estado;
        $cliente->tipoCliente_id = $request->tipoCliente_id;
        $cliente->obs = $request->obs;
        $cliente->save();
        if ($cliente->save()) {
            return redirect('/clientes')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    public function destroy(Clientes $cliente) {
        if (Clientes::where('id', $cliente->id)->delete()) {
            return redirect('/clientes')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/clientes')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
