<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;
use App\Models\MaterialDidatico;

class MaterialDidaticoController extends Controller
{
    public function create($modulo_id)
    {
        $modulo = Modulo::findOrFail($modulo_id);
        return view('materiais_didaticos.create', compact('modulo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'caminho' => 'required',
            'tipo_de_arquivo' => 'required',
        ]);

        MaterialDidatico::create([
            'modulo_id' => $request->modulo_id,
            'titulo' => $request->titulo,
            'caminho' => $request->caminho,
            'tipo_de_arquivo' => $request->tipo_de_arquivo,
        ]);

        return redirect()->route('modulos.show', $request->modulo_id)->with('success', 'Material adicionado com sucesso!');
    }
}
