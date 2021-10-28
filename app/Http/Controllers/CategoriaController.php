<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $categoria = Categoria::where('estado', 1)->get();
        return view('categorias.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('categorias.add');
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

        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->obs = $request->obs;
        $categoria->estado = 1;
        $categoria->save();
        if ($categoria->save()) {
            return redirect('/categorias')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/categorias')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria) {
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $categoria->nome = $request->nome;
        $categoria->obs = $request->obs;
        $categoria->save();
        if ($categoria->save()) {
            return redirect('/categorias')->with(['mensagem' => 'Categoria actualizado com sucesso']);
        } else {
            return redirect('/categorias')->with(['mensagem' => 'Falha ao Actualizar a categoria']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria) {
        $categoria->estado = 0;
        $categoria->save();
        if ($categoria->save()) {
            return redirect('/categorias')->with(['mensagem' => 'Categoria deletado com sucesso']);
        } else {
            return redirect('/categorias')->with(['mensagem' => 'Falha ao Deletar Categoria']);
        }
    }

}
