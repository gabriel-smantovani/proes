<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos = Modulo::all();
        return view('modulos.index', compact('modulos'));
    }

    public function show($id)
    {
        $modulo = Modulo::with(['fases', 'materiais_didaticos'])->findOrFail($id);

        return view('modulos.show', [
            'modulo' => $modulo,
            'fases' => $modulo->fases,
            'materiais_didaticos' => $modulo->materiais_didaticos,
        ]);
    }

    
    public function edit(Modulo $modulo)
    {
        return view('modulos.edit', compact('modulo'));
    }

    public function update(Request $request, Modulo $modulo)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'desc' => 'nullable|string',
        ]);

        $modulo->update($request->only('titulo', 'desc'));

        return redirect()->route('modulos.show', $modulo->id)->with('success', 'Módulo atualizado com sucesso!');
    }
}
