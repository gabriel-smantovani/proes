<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntaSeeder extends Seeder
{
    public function run(): void
    {
        Pergunta::updateOrCreate(
            ['fase_id' => '1', 'desc' => 'Fase 1 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '1', 'desc' => 'Fase 1 pergunta 2'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '1', 'desc' => 'Fase 1 pergunta 3'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '2', 'desc' => 'Fase 2 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '2', 'desc' => 'Fase 2 pergunta 2'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '2', 'desc' => 'Fase 2 pergunta 3'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '3', 'desc' => 'Fase 3 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '3', 'desc' => 'Fase 3 pergunta 2'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '3', 'desc' => 'Fase 3 pergunta 3'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '4', 'desc' => 'Fase 4 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '5', 'desc' => 'Fase 5 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '6', 'desc' => 'Fase 6 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '7', 'desc' => 'Fase 7 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '8', 'desc' => 'Fase 8 pergunta 1'],
            []
        );

        Pergunta::updateOrCreate(
            ['fase_id' => '9', 'desc' => 'Fase 9 pergunta 1'],
            []
        );
    }
}
