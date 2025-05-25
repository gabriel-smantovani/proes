<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Avatar;

class AvatarSeeder extends Seeder
{
    public function run(): void
    {
        Avatar::updateOrCreate(
            ['id' => '1'],
            [
                'nome' => 'Cabeça de orc',
                'imagem' => 'defaultcabeca.png',
                'preco' => 0,
                'equipado_em' => 'cabeca'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '2'],
            [
                'nome' => 'Traje de orc',
                'imagem' => 'defaulttraje.png',
                'preco' => 0,
                'equipado_em' => 'traje'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '3'],
            [
                'nome' => 'Capacete do Darth Vader',
                'imagem' => 'cabecadarthvader.png',
                'preco' => 1,
                'equipado_em' => 'cabeca'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '4'],
            [
                'nome' => 'Traje do Darth Vader',
                'imagem' => 'trajedarthvader.png',
                'preco' => 1,
                'equipado_em' => 'traje'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '5'],
            [
                'nome' => 'Cabeça do Sullivan',
                'imagem' => 'cabecasullivan.png',
                'preco' => 1,
                'equipado_em' => 'cabeca'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '6'],
            [
                'nome' => 'Traje do Sullivan',
                'imagem' => 'trajesullivan.png',
                'preco' => 1,
                'equipado_em' => 'traje'
            ]
        );
    }
}
