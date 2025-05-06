<?php

namespace App\Services;

use App\Models\User;
use App\Models\Conquista;

class ConquistaService
{
    public function verificarConquistas(User $usuario)
    {
        $this->verificarPrimeiraFaseJogada($usuario);
        $this->verificarAcumulouMoedas($usuario);
        $this->verificarTodasFasesModulo1($usuario);
    }

    private function desbloquear(User $usuario, string $nomeConquista)
    {
        $conquista = Conquista::where('nome', $nomeConquista)->first();

        if ($conquista && !$usuario->conquistas->contains($conquista->id)) {
            $usuario->conquistas()->attach($conquista->id);
            session()->flash('conquista', "Você desbloqueou a conquista: {$conquista->nome}");
        }
    }

    private function verificarPrimeiraFaseJogada(User $usuario)
    {
        if ($usuario->resultadosFases()->exists()) {
            $this->desbloquear($usuario, 'Boas-vindas!');
        }
    }

    private function verificarAcumulouMoedas(User $usuario)
    {
        if ($usuario->moedas >= 6) {
            $this->desbloquear($usuario, 'Mão de vaca');
        }
    }

    private function verificarTodasFasesModulo1(User $usuario)
    {
        $idsFasesModulo1 = [1, 2, 3]; // IDs das fases do módulo 1
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if (collect($idsFasesModulo1)->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Era uma vez...');
        }
    }

    private function verificarTodasFasesModulo2(User $usuario)
    {
        $idsFasesModulo2 = [4, 5]; // IDs das fases do módulo 2
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if (collect($idsFasesModulo2)->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Quanta informação!');
        }
    }

    private function verificarTodasFasesModulo3(User $usuario)
    {
        $idsFasesModulo3 = [6]; // IDs das fases do módulo 3
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if (collect($idsFasesModulo3)->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Acabou!?');
        }
    }
}
