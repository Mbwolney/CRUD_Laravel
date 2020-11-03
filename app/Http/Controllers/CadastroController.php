<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cadastro::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'dataNascimento' => $request->dataNascimento,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
        ]);

    
        return "Usuário criado com Sucesso!!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastros = Cadastro::findOrFail($id);
        return view('cadastros.show', ['cadastros' => $cadastros]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastros = Cadastro::findOrFail($id);
        return view('cadastros.edit', ['cadastros' => $cadastros]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cadastros = Cadastro::findOrFail($id);

        Cadastro::update([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'dataNascimento' => $request->dataNascimento,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
        ]);

    
        return "Usuário alterado com Sucesso!!";
    }

    public function delete($id)
    {
        $cadastros = Cadastro::findOrFail($id);
        return view('cadastros.delete', ['cadastros' => $cadastros]);
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cadastros = Cadastro::findOrFail($id);
        $cadastros->delete();

        return "Usuário excluido com sucesso!!";
    }
}
