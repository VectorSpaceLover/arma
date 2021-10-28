<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use Illuminate\Http\Request;

class GuiaController extends Controller
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
        $nota_entregas = Guia::all();
        return view('guia.index', compact('nota_entregas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('guia.add');
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

        $nota_entregas = new Guia();
        $nota_entregas->nome = $request->nome;
        $nota_entregas->obs = $request->obs;
        $nota_entregas->estado = 1;
        $nota_entregas->save();
        if ($nota_entregas->save()) {
            return redirect('/guia')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/guia')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Guia $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Guia $cliente) {
        return view('nota_entregas.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guia $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $nota_entregas->nome = $request->nome;
        $nota_entregas->obs = $request->obs;
        $nota_entregas->save();
        if ($nota_entregas->save()) {
            return redirect('/guia')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/guia')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guia $cliente) {
        $nota_entregas->estado = 0;
        $nota_entregas->save();
        if ($nota_entregas->save()) {
            return redirect('/guia')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/guia')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
