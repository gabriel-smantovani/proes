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
        return view('materiaisdidaticos.create', compact('modulo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'link' => 'required|url',
        ]);

        MaterialDidatico::create([
            'modulo_id' => $request->modulo_id,
            'titulo' => $request->titulo,
            'link' => $request->link,
        ]);

        return redirect()->route('modulos.show', $request->modulo_id)->with('success', 'Material adicionado com sucesso!');
    }
}
