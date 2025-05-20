<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fase;
use App\Models\Pergunta;
use Illuminate\Support\Facades\Auth;

class PerguntaController extends Controller
{
    public function show(Fase $fase)
    {
        $perguntas = $fase->perguntas()->with('respostas')->get();

        return view('perguntas.show', compact('fase', 'perguntas'));
    }

    public function create($fase_id)
    {
        return view('perguntas.create', compact('fase_id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'perguntas.respostas.*.desc' => 'required|string',
            'perguntas.resposta_correta' => 'required',
            'desc' => 'required|string',
            'fase_id' => 'required|exists:fases,id',
        ]);

        $pergunta = \App\Models\Pergunta::create([
            'desc' => $request->desc,
            'fase_id' => $request->fase_id,
        ]);

        foreach ($request->input('perguntas.respostas', []) as $index => $resposta) {
            $pergunta->respostas()->create([
                'desc' => $resposta['desc'],
                'correta' => $request->input('perguntas.resposta_correta') == $index,
            ]);
        }

        return redirect()->route('perguntas.show', $request->fase_id)->with('success', 'Pergunta criada com sucesso!');
    }

    public function edit(Pergunta $pergunta)
    {
        $pergunta->load('fase', 'respostas');

        if (auth()->user()->id !== $pergunta->fase->user_id) {
            abort(403, 'Acesso negado. Apenas quem elaborou o conteúdo pode alterá-lo ou excluí-lo.');
        }

        return view('perguntas.edit', compact('pergunta'));
    }

    public function update(Request $request, $id)
    {
        $pergunta = Pergunta::findOrFail($id);
        $pergunta->update([
            'desc' => $request->input('desc'),
        ]);

        foreach ($pergunta->respostas as $resposta) {
            $novaDesc = $request->input("respostas.{$resposta->id}.desc");
            $resposta->update([
                'desc' => $novaDesc,
                'correta' => $request->resposta_correta == $resposta->id,
            ]);
        }

        return redirect()->route('perguntas.show', $pergunta->fase_id)->with('success', 'Pergunta atualizada com sucesso!');
    }

    public function destroy(Pergunta $pergunta)
    {
        $pergunta->respostas()->delete();
        $pergunta->delete();

        return redirect()->back()->with('success', 'Pergunta excluída com sucesso.');
    }
}
