<?php

namespace App\Services;

use App\Models\User;
use App\Models\Conquista;
use App\Models\Modulo;
use App\Models\Fase;
use App\Models\Pergunta;
use App\Models\ResultadoFase;

class ConquistaService
{
    public function verificarConquistas(User $usuario)
    {
        $this->verificarPrimeiraFaseJogada($usuario);
        $this->verificarAcumulouMoedas($usuario);
        $this->verificarFasesDoModulo1($usuario);
        $this->verificarFasesDoModulo2($usuario);
        $this->verificarFasesDoModulo3($usuario);
        $this->verificarMudancaAvatar($usuario);
        $this->verificarMudancasContato($usuario);
        $this->verificarCompletudeDoJogo($usuario);
    }

    private function desbloquear(User $usuario, string $nomeConquista)
    {
        $conquista = Conquista::where('nome', $nomeConquista)->first();

        if ($conquista && !$usuario->conquistas->contains($conquista->id)) {
            $usuario->conquistas()->attach($conquista->id);
        }
    }

    private function verificarPrimeiraFaseJogada(User $usuario)
    {
        if ($usuario->resultadosFases()->exists()) {
            $this->desbloquear($usuario, 'O início de uma jornada!');
        }
    }

    private function verificarAcumulouMoedas(User $usuario)
    {
        if ($usuario->moedas >= 10) {
            $this->desbloquear($usuario, 'Mão de vaca');
        }
    }

    private function verificarFasesDoModulo1(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 1)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Lá se vai o primeiro');
        }
    }

    private function verificarFasesDoModulo2(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 2)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Mais um!');
        }
    }

    private function verificarFasesDoModulo3(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 3)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Já acabou!?');
        }
    }

    private function verificarMudancaAvatar(User $usuario) {
        if ($usuario->avatar_cabeca !== 'defaultcabeca.png' || $usuario->avatar_traje !== 'defaulttraje.png') {
            $this->desbloquear($usuario, 'À sua cara!');
        }
    }

    private function verificarMudancasContato(User $usuario) {
        if (!is_null($usuario->link_github) || !is_null($usuario->link_linkedin) || !is_null($usuario->instituicao_ensino)) {
            $this->desbloquear($usuario, 'Tô aqui ó');
        }
    }

    private function verificarCompletudeDoJogo(User $usuario) {
        $totalPontos = Pergunta::count();
        $totalPontosDoUsuario = ResultadoFase::where('user_id', $usuario->id)->sum('pontuacao');
        
        if ($totalPontos === (int) $totalPontosDoUsuario) {
            $this->desbloquear($usuario, 'Platinado');
        }
    }
}
