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
            ['modulo_id' => '1', 'titulo' => 'Fase 1'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '1', 'titulo' => 'Fase 2'],
            []
        );
        
        Fase::updateOrCreate(
            ['modulo_id' => '1', 'titulo' => 'Fase 3'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '2', 'titulo' => 'Fase 1 módulo 2'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '2', 'titulo' => 'Fase 2 módulo 2'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '2', 'titulo' => 'Fase 3 módulo 2'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '3', 'titulo' => 'Fase 1 módulo 3'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '3', 'titulo' => 'Fase 2 módulo 3'],
            []
        );

        Fase::updateOrCreate(
            ['modulo_id' => '3', 'titulo' => 'Fase 3 módulo 3'],
            []
        );
    }
}
