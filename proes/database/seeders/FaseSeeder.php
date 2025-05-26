<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fase;

class FaseSeeder extends Seeder
{
    public function run(): void
    {
        Fase::updateOrCreate(
            ['id' => '1'],
            ['modulo_id' => '1', 'titulo' => 'Modelos de Processo de Software']
        );

        Fase::updateOrCreate(
            ['id' => '2'],
            ['modulo_id' => '1', 'titulo' => 'Definições de requisitos']
        );

        Fase::updateOrCreate(
            ['id' => '3'],
            ['modulo_id' => '1', 'titulo' => 'Técnicas para definições de requisitos']
        );

        Fase::updateOrCreate(
            ['id' => '4'],
            ['modulo_id' => '2', 'titulo' => 'Casos de uso']
        );

        Fase::updateOrCreate(
            ['id' => '5'],
            ['modulo_id' => '2', 'titulo' => 'Arquitetura de software e git']
        );

        Fase::updateOrCreate(
            ['id' => '6'],
            ['modulo_id' => '2', 'titulo' => 'Modelos de ciclo de vida do software']
        );

        Fase::updateOrCreate(
            ['id' => '7'],
            ['modulo_id' => '3', 'titulo' => 'RUP']
        );

        Fase::updateOrCreate(
            ['id' => '8'],
            ['modulo_id' => '3', 'titulo' => 'Diagramas de sequência e atividade']
        );

        Fase::updateOrCreate(
            ['id' => '9'],
            ['modulo_id' => '3', 'titulo' => 'Multidisciplinares']
        );
    }
}
