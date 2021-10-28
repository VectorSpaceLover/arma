<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('gest.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gest.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
        return view('gest.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        // echo "ddfdf";
        //
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'estado' => 'required|string|max:50',
            'nivelAcesso' => 'string|max:50',
            'oldPassword' => 'string|max:50',
            'newPassword' => 'string|max:50',
            'confirmPassword' => 'string|max:50',
        ]);

        // var_dump($validated);

        $users = User::all();
        foreach ($users as $user) {
            if ($request->email == $user->email and $request->id != $user->id) {
                return redirect()->back()->with(['mensagem' => 'Falha em actualizar: O número refererência já existe no sistema ']);
                // echo "email repeat";
            }
        }
        if(!(Hash::check($request->oldPassword, $user->password)) || $request->newPassword != $request->confirmPassword) {
            echo "password No";
            return redirect()->back()->with(['mensagem' => 'Falha em actualizar: Senha incorreta ']);
        }else {
            echo "Password OK";
        }
        $user->name = $request->name;
        echo $user->name;
        $user->email = $request->email;
        $user->estado = $request->estado;
        $user->nivelAcesso = $request->nivelAcesso;
        $user->password = Hash::make($request->newPassword);
        
        $user->save();
        if ($user->save()) {
            return redirect('/gest')->with(['mensagem' => 'Actualizado com sucesso']);
        } else {
            return redirect('/gest')->with(['mensagem' => 'Falha ao Actualizar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
        $user->delete();
        return redirect('/gest')->with(['mensagem' => 'Excluído com sucesso.']);
    }
}
