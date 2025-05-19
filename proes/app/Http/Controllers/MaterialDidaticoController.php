<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Modulo;
use App\Models\MaterialDidatico;
use Illuminate\Support\Facades\Auth;

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
            'arquivo' => 'required_if:tipo_de_arquivo,upload|nullable|file|mimes:pdf,docx,mp4,zip|max:20480',
        ]);

        if ($request->tipo_de_arquivo === 'upload' && $request->hasFile('arquivo')) {
            $path = $request->file('arquivo')->store('materiais', 'public');
            $caminho = 'storage/' . $path;
        } else {
            $caminho = $request->caminho;

            if ($caminho && !str_starts_with($caminho, 'http://') && !str_starts_with($caminho, 'https://')) {
                $caminho = 'https://' . $caminho;
            }
        }

        $usuario = Auth::user();
        if ($usuario) {
            MaterialDidatico::create([
                'modulo_id' => $request->modulo_id,
                'titulo' => $request->titulo,
                'tipo_de_arquivo' => $request->tipo_de_arquivo,
                'caminho' => $caminho,
                'user_id' => $usuario->id,
            ]);
        } else {
            MaterialDidatico::create([
                'modulo_id' => $request->modulo_id,
                'titulo' => $request->titulo,
                'tipo_de_arquivo' => $request->tipo_de_arquivo,
                'caminho' => $caminho,
            ]);
        }

        return redirect()->route('modulos.show', $request->modulo_id)->with('success', 'Material adicionado com sucesso!');
    }

    public function edit(MaterialDidatico $material)
    {
        if (auth()->user()->id !== $material->user_id) {
            abort(403, 'Acesso negado. Apenas quem elaborou o conteúdo pode alterá-lo ou excluí-lo.');
        }

        $modulos = Modulo::all(); // ou filtrar se necessário
        return view('materiais_didaticos.edit', compact('material', 'modulos'));
    }

    public function update(Request $request, MaterialDidatico $material)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'tipo_de_arquivo' => 'required|in:link,upload',
            'caminho' => 'required_if:tipo_de_arquivo,link|nullable|url',
            'arquivo' => 'required_if:tipo_de_arquivo,upload|nullable|file|max:20480',
        ]);

        $material->modulo_id = $request->modulo_id;
        $material->titulo = $request->titulo;
        $material->tipo_de_arquivo = $request->tipo_de_arquivo;

        if ($request->tipo_de_arquivo === 'upload' && $request->hasFile('arquivo')) {
            $path = $request->file('arquivo')->store('materiais', 'public');
            $material->caminho = 'storage/' . $path;
        } elseif ($request->tipo_de_arquivo === 'link') {
            $caminho = $request->caminho;

            if ($caminho && !str_starts_with($caminho, 'http://') && !str_starts_with($caminho, 'https://')) {
                $caminho = 'https://' . $caminho;
            }

            $material->caminho = $caminho;
        }

        $material->save();

        return redirect()->route('modulos.index')->with('success', 'Material atualizado com sucesso!');
    }

    public function destroy(MaterialDidatico $material)
    {
        try {
            if ($material->tipo_de_arquivo !== 'link' && \Storage::exists($material->caminho)) {
                \Storage::delete($material->caminho);
            }

            $material->delete();

            return redirect()->back()->with('success', 'Material excluído com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao excluir: ' . $e->getMessage());
        }
    }
}
