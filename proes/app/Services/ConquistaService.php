<?php

namespace App\Services;

use App\Models\User;
use App\Models\Conquista;
use App\Models\Modulo;
use App\Models\Fase;

class ConquistaService
{
    public function verificarConquistas(User $usuario)
    {
        $this->verificarPrimeiraFaseJogada($usuario);
        $this->verificarAcumulouMoedas($usuario);
        $this->verificarFasesDoModulo1($usuario);
        $this->verificarFasesDoModulo2($usuario);
        $this->verificarFasesDoModulo3($usuario);
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

    private function verificarFasesDoModulo1(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 1)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Era uma vez...');
        }
    }

    private function verificarFasesDoModulo2(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 2)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Quanta informação!');
        }
    }

    private function verificarFasesDoModulo3(User $usuario)
    {
        $idsFasesDoModulo = Fase::where('modulo_id', 3)->pluck('id');
        $fasesJogadas = $usuario->resultadosFases()->pluck('fase_id')->unique();

        if ($idsFasesDoModulo->diff($fasesJogadas)->isEmpty()) {
            $this->desbloquear($usuario, 'Acabou!?');
        }
    }

}
