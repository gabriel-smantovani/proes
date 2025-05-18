<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Modulo;
use App\Models\Fase;
use App\Models\Pergunta;
use App\Models\Resposta;

class FaseController extends Controller
{
    public function index()
    {
        $fases = Fase::with('modulo')->get(); // ou paginate
        return view('fases.index', compact('fases'));
    }

    public function show($id)
    {
        $fase = Fase::with(['modulo', 'perguntas.respostas'])->findOrFail($id);

        return view('fases.show', [
            'fase' => $fase,
            'modulo' => $fase->modulo,
            'perguntas' => $fase->perguntas,
        ]);
    }

    public function create($modulo_id)
    {
        if (auth()->user()->tipo !== 'professor') {
            abort(403, 'Acesso negado. Apenas professores podem acessar esta página.');
        }
        
        $modulo = Modulo::findOrFail($modulo_id);
        return view('fases.create', compact('modulo'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modulo_id' => 'required|exists:modulos,id',
            'titulo' => 'required|string|max:255',
            'perguntas' => 'required|array|min:1',
            'perguntas.*.desc' => 'required|string',
            'perguntas.*.respostas' => 'required|array|min:1',
            'perguntas.*.resposta_correta' => 'required|integer',
            'perguntas.*.respostas.*.desc' => 'required|string',
        ]);

        $fase = Fase::create([
            'modulo_id' => $request->modulo_id,
            'titulo' => $request->titulo,
        ]);

        foreach ($request->perguntas as $perguntaIndex => $perguntaData) {
            $pergunta = Pergunta::create([
                'fase_id' => $fase->id,
                'desc' => $perguntaData['desc'],
            ]);

            foreach ($perguntaData['respostas'] as $respostaIndex => $respostaData) {
                Resposta::create([
                    'pergunta_id' => $pergunta->id,
                    'desc' => $respostaData['desc'],
                    'correta' => ($respostaIndex == $perguntaData['resposta_correta']),
                ]);
            }
        }

        return redirect()->route('modulos.index')->with('success', 'Fase criada com sucesso!');
    }

    public function destroy(Fase $fase)
    {
        $moduloId = $fase->modulo_id;

        foreach ($fase->perguntas as $pergunta) {
            $pergunta->respostas()->delete();
        }

        $fase->perguntas()->delete();

        $fase->delete();

        return redirect()->route('modulos.show', ['id' => $moduloId])->with('success', 'Fase e conteúdos associados excluídos com sucesso.');
    }
}
