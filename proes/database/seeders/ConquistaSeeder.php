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
            ['nome' => 'Boas-vindas!'],
            ['descricao' => 'Jogou uma fase pela primeira vez']
        );

        Conquista::updateOrCreate(
            ['nome' => 'Mão de vaca'],
            ['descricao' => 'Acumulou todas as moedas possíveis']
        );

        Conquista::updateOrCreate(
            ['nome' => 'Era uma vez...'],
            ['descricao' => 'Completou o primeiro módulo']
        );

        Conquista::updateOrCreate(
            ['nome' => 'Quanta informação!'],
            ['descricao' => 'Completou o segundo módulo']
        );

        Conquista::updateOrCreate(
            ['nome' => 'Acabou!?'],
            ['descricao' => 'Completou o terceiro módulo']
        );
    }
}
