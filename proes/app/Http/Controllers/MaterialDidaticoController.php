<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;
use App\Models\MaterialDidatico;

class MaterialDidaticoController extends Controller
{
    public function create($modulo_id)
    {
        if (auth()->user()->tipo !== 'professor') {
            abort(403, 'Acesso negado. Apenas professores podem acessar esta página.');
        }
        
        $modulo = Modulo::findOrFail($modulo_id);
        return view('materiais_didaticos.create', compact('modulo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'tipo_de_arquivo' => 'required|in:link,upload',
            'caminho' => 'required_if:tipo_de_arquivo,link|nullable|url',
            'arquivo' => 'required_if:tipo_de_arquivo,upload|nullable|file|mimes:pdf,docx,mp4,zip|max:20480', // até 20MB
        ]);

        if ($request->tipo_de_arquivo === 'upload' && $request->hasFile('arquivo')) {
            $path = $request->file('arquivo')->store('materiais', 'public');
            $caminho = 'storage/' . $path;
        } else {
            $caminho = $request->caminho;
        }

        \App\Models\MaterialDidatico::create([
            'modulo_id' => $request->modulo_id,
            'titulo' => $request->titulo,
            'tipo_de_arquivo' => $request->tipo_de_arquivo,
            'caminho' => $caminho,
        ]);

        return redirect()->route('modulos.show', $request->modulo_id)->with('success', 'Material adicionado com sucesso!');
    }
}
