<?php

namespace App\Http\Controllers;

use App\Models\Fase;
use App\Models\ResultadoFase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultadoFaseController extends Controller
{
    public function finalizar(Request $request, $faseId)
    {
        $fase = Fase::with('perguntas.respostas')->findOrFail($faseId);
        $user = Auth::user();

        $respostasSelecionadas = $request->input('respostas', []);

        // Para corrigir as respostas
        $acertos = 0;
        foreach ($fase->perguntas as $pergunta) {
            foreach ($pergunta->respostas as $resposta) {
                if (isset($respostasSelecionadas[$pergunta->id]) && $respostasSelecionadas[$pergunta->id] == $resposta->id && $resposta->correta) {
                    $acertos++;
                }
            }
        }

        // Para saber se o usuário já jogou a fase
        $resultado = ResultadoFase::firstOrNew([
            'user_id' => $user->id,
            'fase_id' => $fase->id,
        ]);

        $moedas_ganhas = 0;

        if ($resultado->exists) {
            // Se já jogou antes, limitar a quantidade de moeda disponível da fase
            if ($acertos > $resultado->pontuacao) {
                $moedas_ganhas = $acertos - $resultado->pontuacao;
                $resultado->pontuacao = $acertos;
            }
        } else {
            // Se nunca jogou, ganha todas as moedas pelos acertos
            $resultado->pontuacao = $acertos;
            $moedas_ganhas = $acertos;
        }

        $resultado->save();

        // Para atualizar o saldo de moedas do usuário com o resultado obtido anteriormente
        $user->moedas += $moedas_ganhas;
        $user->save();

        $moeda_s = ($moedas_ganhas == 0 || $moedas_ganhas == 1) ? 'moeda' : 'moedas';

        return redirect()->route('modulos.show', ['id' => $fase->modulo_id])->with('success', "Você ganhou {$moedas_ganhas} {$moeda_s}!");
    }
}
