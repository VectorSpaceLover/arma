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

        // $validated = $request->validate([
        //     'cod' => 'required|string|min:3|max:50',
        // ]);
        $faturacaos = new Faturacao();
        $faturacaos->cod = $request->cod;
        $faturacaos->cliente_id = $request->cliente_id;
        $faturacaos->nuit = $request->nuit;
        $faturacaos->produto_id = $request->produto_id;
        $faturacaos->Iva = $request->Iva;
        $faturacaos->disconto = $request->disconto;
        $faturacaos->entregue = $request->entregue;
        $faturacaos->user_id = $request->user_id;
        $faturacaos->pago = $request->pago;
        // $faturacaos->created_at = "2010-10-08";
        // $faturacaos->update_at = "2010-12-09";
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
    public function edit(Faturacao $faturacao) {
        return view('faturacao.edit', compact('faturacao'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\faturacaos  $faturacaos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faturacao $faturacaos) {
        $faturacaos->cod = $request->cod;
        $faturacaos->cliente_id = $request->cliente_id;
        $faturacaos->nuit = $request->nuit;
        $faturacaos->produto_id = $request->produto_id;
        $faturacaos->Iva = $request->Iva;
        $faturacaos->disconto = $request->disconto;
        $faturacaos->entregue = $request->entregue;
        $faturacaos->user_id = $request->user_id;
        $faturacaos->pago = $request->pago;
        $faturacaos->save();
        if ($faturacaos->save()) {
            return redirect('/faturacao')->with(['mensagem' => 'faturacaos actualizado com sucesso']);
        } else {
            return redirect('/faturacao')->with(['mensagem' => 'Falha ao Actualizar a faturacaos']);
        }
    }

    
    public function destroy(Faturacao $faturacao) {
        if (Faturacao::where('id', $faturacao->id)->delete()) {
            return redirect('/faturacao')->with(['mensagem' => 'faturacao deletado com sucesso']);
        } else {
            return redirect('/faturacao')->with(['mensagem' => 'Falha ao Deletar faturacao']);
        }
    }
}
