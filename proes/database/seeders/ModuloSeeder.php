<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Modulo;

class ModuloSeeder extends Seeder
{
    public function run(): void
    {
        Modulo::updateOrCreate(
            ['titulo' => 'ES1'],
            [
                'desc' => 'Este módulo contempla conteúdos como crise do software, modelos de processo de software entre outros introdutórios para a disciplina.',
                'img_link' => 'bi bi-book'
            ]
        );

        Modulo::updateOrCreate(
            ['titulo' => 'ES2'],
            [
                'desc' => 'Este módulo contempla conteúdos como técnicas e diagramas, ferramentas que auxiliam e compõem a documentação de um software.',
                'img_link' => 'bi bi-book-half'
            ]
        );

        Modulo::updateOrCreate(
            ['titulo' => 'ES3'],
            [
                'desc' => 'Este módulo contempla conteúdos como testes de caixa branca e caixa preta entre outros diagramas que completam a documentação do software mais voltados à modelagem do mesmo.',
                'img_link' => 'bi bi-book-fill'
            ]
        );
    }
}
