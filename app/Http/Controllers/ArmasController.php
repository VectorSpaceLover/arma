<?php

namespace App\Http\Controllers;

use App\Models\Armas;
use Illuminate\Http\Request;

class ArmasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $arma = Armas::where('estado', 1)->get();
        return view('armas.index', compact('arma'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categoria = \App\Models\Categoria::where('estado', 1)->get();
        return view('armas.add', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'numero' => 'required|string|max:50|unique:armas',
            'marca' => 'required|string|max:50',
            'municoes' => 'required|string|max:50',
            'calibre' => 'required|string|max:50',
            'carregamento' => 'required|string|max:50',
            'importacao' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'classificacao' => 'required|string|max:50',
            'tiros' => 'required|string|max:50',
            'percursao' => 'required|string|max:50',
            'comprimentoCano' => 'required|string|max:50',
            'mecanismo' => 'required|string|max:50',
            'categoria' => 'required|string|max:50',
            'preco' => 'required|string|max:50',
            'quantidade_stoque' => 'required|string|max:50',
        ]);


        $arma = new Armas;
        $arma->numero = $request->numero;
        $arma->marca = $request->marca;
        $arma->municoes = $request->municoes;
        $arma->calibre = $request->calibre;
        $arma->carregamento = $request->carregamento;
        $arma->origem_importacao = $request->importacao;
        $arma->modelo = $request->modelo;
        $arma->classificacao = $request->classificacao;
        $arma->nr_tiros = $request->tiros;
        $arma->percussao = $request->percursao;
        $arma->comprimento = $request->comprimentoCano;
        $arma->mecanismo = $request->mecanismo;
        $arma->categoria_id = $request->categoria;
        $arma->preco = $request->preco;
        $arma->estado = 1;
        $arma->user_id = auth()->id();
        $arma->quantidade_stoque = $request->quantidade_stoque;
        $arma->save();
        if ($arma->save()) {
            return redirect('/armas')->with(['mensagem' => 'Adicionado com sucesso']);
        } else {
            return redirect('/armas')->with(['mensagem' => 'Falha ao adicionar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function show(Armas $armas) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function edit(Armas $armas) {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armas $armas) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Armas $armas) {
        
    }

    public function deleleArma(Armas $arma) {
        $arma->estado = 0;
        $arma->save();
        if ($arma->save()) {
            return redirect('/armas')->with(['mensagem' => 'Deletado com sucesso']);
        } else {
            return redirect('/armas')->with(['mensagem' => 'Falha ao Deletar']);
        }
    }

    public function editArma(Armas $arma) {
        $categoria = \App\Models\Categoria::where('estado', 1)->get();
        return view('armas.edit', compact('arma', 'categoria'));
    }

    public function updateArma(Request $request, Armas $arma) {

        $validated = $request->validate([
            'marca' => 'required|string|max:50',
            'municoes' => 'required|string|max:50',
            'calibre' => 'required|string|max:50',
            'carregamento' => 'required|string|max:50',
            'importacao' => 'required|string|max:50',
            'modelo' => 'required|string|max:50',
            'classificacao' => 'required|string|max:50',
            'tiros' => 'required|string|max:50',
            'percursao' => 'required|string|max:50',
            'comprimentoCano' => 'required|string|max:50',
            'mecanismo' => 'required|string|max:50',
            'categoria' => 'required|string|max:50',
            'preco' => 'required|string|max:50',
            'quantidade_stoque' => 'required|string|max:50',
        ]);
        
        $numeroArma = Armas::all();
        foreach($numeroArma as $numeroArmaLinha){
             if($request->numero == $numeroArmaLinha->numero and $request->id != $numeroArmaLinha->id ){
                return redirect()->back()->with(['mensagem' => 'Falha em actualizar: O número refererência já existe no sistema ']);
            }
        } 

        $arma->numero = $request->numero;
        $arma->marca = $request->marca;
        $arma->municoes = $request->municoes;
        $arma->calibre = $request->calibre;
        $arma->carregamento = $request->carregamento;
        $arma->origem_importacao = $request->importacao;
        $arma->modelo = $request->modelo;
        $arma->classificacao = $request->classificacao;
        $arma->nr_tiros = $request->tiros;
        $arma->percussao = $request->percursao;
        $arma->comprimento = $request->comprimentoCano;
        $arma->mecanismo = $request->mecanismo;
        $arma->categoria_id = $request->categoria;
        $arma->preco = $request->preco;
        $arma->user_id = auth()->id();
        $arma->quantidade_stoque = $request->quantidade_stoque;
        $arma->save();
        if ($arma->save()) {
            return redirect('/armas')->with(['mensagem' => 'Actualizado com sucesso']);
        } else {
            return redirect('/armas')->with(['mensagem' => 'Falha ao Actualizar']);
        }
    }

}
