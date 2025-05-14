<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Resposta;

class RespostaSeeder extends Seeder
{
    public function run(): void
    {
        //Fase 1

        Resposta::updateOrCreate(
            ['id' => '1'],
            ['pergunta_id' => '1', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '2'],
            ['pergunta_id' => '1', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '3'],
            ['pergunta_id' => '1', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '4'],
            ['pergunta_id' => '1', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '5'],
            ['pergunta_id' => '2', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '6'],
            ['pergunta_id' => '2', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '7'],
            ['pergunta_id' => '2', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '8'],
            ['pergunta_id' => '2', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '9'],
            ['pergunta_id' => '3', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '10'],
            ['pergunta_id' => '3', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '11'],
            ['pergunta_id' => '3', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '12'],
            ['pergunta_id' => '3', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 2

        Resposta::updateOrCreate(
            ['id' => '13'],
            ['pergunta_id' => '4', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '14'],
            ['pergunta_id' => '4', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '15'],
            ['pergunta_id' => '4', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '16'],
            ['pergunta_id' => '4', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '17'],
            ['pergunta_id' => '5', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '18'],
            ['pergunta_id' => '5', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '19'],
            ['pergunta_id' => '5', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '20'],
            ['pergunta_id' => '5', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '21'],
            ['pergunta_id' => '6', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '22'],
            ['pergunta_id' => '6', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '23'],
            ['pergunta_id' => '6', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '24'],
            ['pergunta_id' => '6', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 3

        Resposta::updateOrCreate(
            ['id' => '25'],
            ['pergunta_id' => '7', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '26'],
            ['pergunta_id' => '7', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '27'],
            ['pergunta_id' => '7', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '28'],
            ['pergunta_id' => '7', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '29'],
            ['pergunta_id' => '8', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '30'],
            ['pergunta_id' => '8', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '31'],
            ['pergunta_id' => '8', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '32'],
            ['pergunta_id' => '8', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '33'],
            ['pergunta_id' => '9', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '34'],
            ['pergunta_id' => '9', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '35'],
            ['pergunta_id' => '9', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '36'],
            ['pergunta_id' => '9', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 4

        Resposta::updateOrCreate(
            ['id' => '37'],
            ['pergunta_id' => '10', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '38'],
            ['pergunta_id' => '10', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '39'],
            ['pergunta_id' => '10', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '40'],
            ['pergunta_id' => '10', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 5

        Resposta::updateOrCreate(
            ['id' => '41'],
            ['pergunta_id' => '11', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '42'],
            ['pergunta_id' => '11', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '43'],
            ['pergunta_id' => '11', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '44'],
            ['pergunta_id' => '11', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 6

        Resposta::updateOrCreate(
            ['id' => '45'],
            ['pergunta_id' => '12', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '46'],
            ['pergunta_id' => '12', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '47'],
            ['pergunta_id' => '12', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '48'],
            ['pergunta_id' => '12', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 7

        Resposta::updateOrCreate(
            ['id' => '49'],
            ['pergunta_id' => '13', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '50'],
            ['pergunta_id' => '13', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '51'],
            ['pergunta_id' => '13', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '52'],
            ['pergunta_id' => '13', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 8

        Resposta::updateOrCreate(
            ['id' => '53'],
            ['pergunta_id' => '14', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '54'],
            ['pergunta_id' => '14', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '55'],
            ['pergunta_id' => '14', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '56'],
            ['pergunta_id' => '14', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 9

        Resposta::updateOrCreate(
            ['id' => '57'],
            ['pergunta_id' => '15', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '58'],
            ['pergunta_id' => '15', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '59'],
            ['pergunta_id' => '15', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '60'],
            ['pergunta_id' => '15', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );
    }
}
