<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Modulo;
use App\Models\MaterialDidatico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MaterialDidaticoController extends Controller
{
    private function extrairYoutubeId($url) {
        preg_match(
            '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/',
            $url,
            $matches
        );
        return $matches[1] ?? null;
    }

    public function create($moduloId)
    {
        $modulo = Modulo::findOrFail($moduloId);
        return view('materiais_didaticos.create', compact('modulo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'tipo_de_arquivo' => 'required|in:upload,link,youtube',
            'arquivo' => 'nullable|file', 
            'caminho' => 'nullable|string',
        ]);

        $caminho = null;
        $youtube_id = null;

        if ($request->tipo_de_arquivo === 'upload' && $request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('materiais', $filename, 'public');
            $caminho = 'materiais/' . $filename;
        } elseif ($request->tipo_de_arquivo === 'link') {
            $caminho = $request->input('caminho');
        } elseif ($request->tipo_de_arquivo === 'youtube') {
            $url = $request->input('caminho');
            $youtubeId = $this->extrairYoutubeId($url);

            if ($youtubeId) {
                $caminho = $youtubeId;
            } else {
                return back()->with('error', 'Link do YouTube inválido.');
            }
        }

        MaterialDidatico::create([
            'modulo_id' => $request->modulo_id,
            'titulo' => $request->titulo,
            'tipo_de_arquivo' => $request->tipo_de_arquivo,
            'user_id' => auth()->id(),
            'caminho' => $caminho,
        ]);

        return redirect()->route('modulos.show', $request->modulo_id)->with('success', 'Material adicionado!');
    }

    public function edit($id)
    {
        $material = MaterialDidatico::findOrFail($id);
        return view('materiais_didaticos.edit', compact('material'));
    }

    public function update(Request $request, MaterialDidatico $material)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'tipo_de_arquivo' => 'required|in:upload,link,youtube',
            'arquivo' => 'nullable|file',
            'caminho' => 'nullable|string',
        ]);

        $caminho = $material->caminho;

        if ($request->tipo_de_arquivo === 'upload' && $request->hasFile('arquivo')) {
        $file = $request->file('arquivo');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('materiais', $filename, 'public');
        $caminho = 'materiais/' . $filename;
        } elseif ($request->tipo_de_arquivo === 'link') {
            $caminho = $request->input('caminho');
        } elseif ($request->tipo_de_arquivo === 'youtube') {
            $url = $request->input('caminho');
            $youtubeId = $this->extrairYoutubeId($url);
            
            if ($youtubeId) {
                $caminho = $youtubeId;
            } else {
                return back()->with('error', 'Link do YouTube inválido.');
            }
        }

        $material->update([
            'titulo' => $request->titulo,
            'tipo_de_arquivo' => $request->tipo_de_arquivo,
            'caminho' => $caminho,
        ]);

        return redirect()->route('modulos.show', $material->modulo_id)->with('success', 'Material atualizado!');
    }

    public function destroy(MaterialDidatico $material)
    {
        if ($material->tipo_de_arquivo === 'upload' && $material->caminho) {
            Storage::disk('public')->delete($material->caminho);
        }

        $material->delete();

        return redirect()->back()->with('success', 'Material removido!');
    }

    public function verVideo($id)
    {
        $material = MaterialDidatico::findOrFail($id);
        return view('materiais_didaticos.ver_video', compact('material'));
    }
}
