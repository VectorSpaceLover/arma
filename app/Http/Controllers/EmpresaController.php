<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
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
        $empresas = Empresa::all();
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('empresa.add');
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

        $empresas = new Empresa();
        $empresas->nome = $request->nome;
        $empresas->obs = $request->obs;
        $empresas->estado = 1;
        $empresas->save();
        if ($empresas->save()) {
            return redirect('/empresa')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/empresa')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $cliente) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $cliente) {
        return view('empresas.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $cliente) {
        $validated = $request->validate([
            'nome' => 'required|string|min:3|max:50',
        ]);
  
        $empresas->nome = $request->nome;
        $empresas->obs = $request->obs;
        $empresas->save();
        if ($empresas->save()) {
            return redirect('/empresa')->with(['mensagem' => 'cliente actualizado com sucesso']);
        } else {
            return redirect('/empresa')->with(['mensagem' => 'Falha ao Actualizar a cliente']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $cliente) {
        $empresas->estado = 0;
        $empresas->save();
        if ($empresas->save()) {
            return redirect('/empresa')->with(['mensagem' => 'cliente deletado com sucesso']);
        } else {
            return redirect('/empresa')->with(['mensagem' => 'Falha ao Deletar cliente']);
        }
    }
}
