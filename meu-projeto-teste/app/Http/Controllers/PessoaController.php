<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index')->with('pessoas', $pessoas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Pessoa::create([
        //    'nome' => $request->nome,
        //    'idade' => $request->idade,
        //    'cpf' => $request->cpf,
        //])


        $nome = $request->nome;
        $idade = $request->idade;
        $cpf = $request->cpf;

        $pessoa = new Pessoa();
        $pessoa->nome = $nome;
        $pessoa->idade = $idade;
        $pessoa->cpf = $cpf;

        $pessoa->save();

        return redirect()->route('pessoas.index')->with('sucess', 'Pessoa adicionada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pessoa = Pessoa::find($id);

        if (isset($pessoa)) {
            $pessoa->nome = $request->nome;
            $pessoa->idade = $request->idade;
            $pessoa->cpf = $request->cpf;

            $pessoa->save();

            return redirect()->route('pessoas.index');
        }

        return '<h1>Não foi possível atualizar!</h1>';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoa = Pessoa::find($id);

        if (isset($pessoa)) {
            $pessoa->delete();
        }

        return '<h1>Registro excluído!</h1>'; 
    }
}
