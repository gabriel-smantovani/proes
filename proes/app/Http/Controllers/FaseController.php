<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fase;
use App\Models\Modulo;

class FaseController extends Controller
{
    public function show($id)
    {
        $fase = Fase::with(['modulo', 'perguntas.respostas'])->findOrFail($id);

        return view('fases.show', [
            'fase' => $fase,
            'modulo' => $fase->modulo,
            'perguntas' => $fase->perguntas,
        ]);
    }

    public function responder(Request $request, $id)
    {
        $respostas = $request->input('respostas');

        // Aqui você pode validar, corrigir, calcular nota, salvar tentativa etc.

        return redirect()->route('modulos.index')->with('success', 'Respostas enviadas com sucesso!');
    }
}
