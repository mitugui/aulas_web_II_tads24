<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index()
    {
        $niveis = Nivel::all();
        return view('niveis.index')->with(['niveis' => $niveis]);
    }
    
    public function create()
    {
        return view('niveis.create');
    }
    
    public function store(Request $request)
    {
        $request->validate(
            ['nome'=>'required|string|min:3']
        );

        Nivel::create($request->all());
        return redirect()->route('niveis.index')->with(['success'=>'Nivel '.$request->nome.' created successfully.']);
    }
    
    public function show(string $id)
    {
        $nivel = Nivel::find($id);
        return view('niveis.show')->with(['nivel' => $nivel]);
    }
    
    public function edit(string $id)
    {
        $nivel = Nivel::find($id);
        return view('niveis.edit')->with(['nivel' => $nivel]);
    }
    
    public function update(Request $request, string $id)
    {
        $request->validate(
            ['nome'=>'required|string|min:3']
        );
        
        $nivel = Nivel::find($id);

        if (isset($nivel)) {
            $nivel->nome = $request->nome;

            $nivel->save();
            return redirect()->route('niveis.index')->with(['success'=>'Nivel '.$nivel->nome.' atualizado com sucesso']);
        }
    }
    
    public function destroy(string $id)
    {
        $nivel = Nivel::find($id);

        if (isset($nivel)) {
            $nivel->delete();
        }

        return redirect()->route('niveis.index')->with(['success'=>'Nivel '.$nivel->nome.' deletado com sucesso']);
    }
}
