<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Conquista;

class ConquistaSeeder extends Seeder
{
    public function run(): void
    {
        Conquista::updateOrCreate(
            ['nome' => 'O início de uma jornada!'],
            [
                'descricao' => 'Jogue uma fase pela primeira vez',
                'desc_alcancada' => 'Jogou uma fase pela primeira vez',
                'imagem' => 'portal.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Lá se vai o primeiro'],
            [
                'descricao' => 'Termine o primeiro módulo',
                'desc_alcancada' => 'Terminou o primeiro módulo',
                'imagem' => 'charmander.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Mais um!'],
            [
                'descricao' => 'Termine o segundo módulo',
                'desc_alcancada' => 'Terminou o segundo módulo',
                'imagem' => 'charmeleon.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Já acabou!?'],
            [
                'descricao' => 'Termine o terceiro módulo',
                'desc_alcancada' => 'Terminou o terceiro módulo',
                'imagem' => 'charizard.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Mão de vaca'],
            [
                'descricao' => 'Acumule 10 moedas',
                'desc_alcancada' => 'Acumulou 10 moedas',
                'imagem' => 'tiopatinhas.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'À sua cara!'],
            [
                'descricao' => 'Personalize o seu avatar',
                'desc_alcancada' => 'Personalizou o seu avatar',
                'imagem' => 'johnnybravo.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Tô aqui ó'],
            [
                'descricao' => 'Incremente suas informações de perfil',
                'desc_alcancada' => 'Incrementou suas informações de perfil',
                'imagem' => 'contato.png'
            ]
        );

        Conquista::updateOrCreate(
            ['nome' => 'Platinado'],
            [
                'descricao' => 'Termine todas as fases com o máximo de pontuação possível',
                'desc_alcancada' => 'Terminou todas as fases com o máximo de pontuação possível',
                'imagem' => 'oumanel.png'
            ]
        );
    }
}
