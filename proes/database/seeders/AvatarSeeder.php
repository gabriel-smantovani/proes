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
                'nome' => 'Cabeça de orc padrão',
                'imagem' => 'defaultcabeca.png',
                'preco' => 0,
                'equipado_em' => 'cabeca'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '2'],
            [
                'nome' => 'Traje de orc padrão',
                'imagem' => 'defaulttraje.png',
                'preco' => 0,
                'equipado_em' => 'traje'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '3'],
            [
                'nome' => 'Cabeça de orc verde',
                'imagem' => 'greenhead.png',
                'preco' => 1,
                'equipado_em' => 'cabeca'
            ]
        );

        Avatar::updateOrCreate(
            ['id' => '4'],
            [
                'nome' => 'Traje de orc verde',
                'imagem' => 'greensuit.png',
                'preco' => 1,
                'equipado_em' => 'traje'
            ]
        );
    }
}
