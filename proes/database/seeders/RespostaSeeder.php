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
            ['fase_id' => '1', 'pergunta_id' => '1', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '2'],
            ['fase_id' => '1', 'pergunta_id' => '1', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '3'],
            ['fase_id' => '1', 'pergunta_id' => '1', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '4'],
            ['fase_id' => '1', 'pergunta_id' => '1', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '5'],
            ['fase_id' => '1', 'pergunta_id' => '2', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '6'],
            ['fase_id' => '1', 'pergunta_id' => '2', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '7'],
            ['fase_id' => '1', 'pergunta_id' => '2', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '8'],
            ['fase_id' => '1', 'pergunta_id' => '2', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '9'],
            ['fase_id' => '1', 'pergunta_id' => '3', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '10'],
            ['fase_id' => '1', 'pergunta_id' => '3', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '11'],
            ['fase_id' => '1', 'pergunta_id' => '3', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '12'],
            ['fase_id' => '1', 'pergunta_id' => '3', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 2

        Resposta::updateOrCreate(
            ['id' => '13'],
            ['fase_id' => '2', 'pergunta_id' => '4', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '14'],
            ['fase_id' => '2', 'pergunta_id' => '4', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '15'],
            ['fase_id' => '2', 'pergunta_id' => '4', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '16'],
            ['fase_id' => '2', 'pergunta_id' => '4', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '17'],
            ['fase_id' => '2', 'pergunta_id' => '5', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '18'],
            ['fase_id' => '2', 'pergunta_id' => '5', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '19'],
            ['fase_id' => '2', 'pergunta_id' => '5', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '20'],
            ['fase_id' => '2', 'pergunta_id' => '5', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '21'],
            ['fase_id' => '2', 'pergunta_id' => '6', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '22'],
            ['fase_id' => '2', 'pergunta_id' => '6', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '23'],
            ['fase_id' => '2', 'pergunta_id' => '6', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '24'],
            ['fase_id' => '2', 'pergunta_id' => '6', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 3

        Resposta::updateOrCreate(
            ['id' => '25'],
            ['fase_id' => '3', 'pergunta_id' => '7', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '26'],
            ['fase_id' => '3', 'pergunta_id' => '7', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '27'],
            ['fase_id' => '3', 'pergunta_id' => '7', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '28'],
            ['fase_id' => '3', 'pergunta_id' => '7', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '29'],
            ['fase_id' => '3', 'pergunta_id' => '8', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '30'],
            ['fase_id' => '3', 'pergunta_id' => '8', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '31'],
            ['fase_id' => '3', 'pergunta_id' => '8', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '32'],
            ['fase_id' => '3', 'pergunta_id' => '8', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '33'],
            ['fase_id' => '3', 'pergunta_id' => '9', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '34'],
            ['fase_id' => '3', 'pergunta_id' => '9', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '35'],
            ['fase_id' => '3', 'pergunta_id' => '9', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '36'],
            ['fase_id' => '3', 'pergunta_id' => '9', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 4

        Resposta::updateOrCreate(
            ['id' => '37'],
            ['fase_id' => '4', 'pergunta_id' => '10', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '38'],
            ['fase_id' => '4', 'pergunta_id' => '10', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '39'],
            ['fase_id' => '4', 'pergunta_id' => '10', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '40'],
            ['fase_id' => '4', 'pergunta_id' => '10', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 5

        Resposta::updateOrCreate(
            ['id' => '41'],
            ['fase_id' => '5', 'pergunta_id' => '11', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '42'],
            ['fase_id' => '5', 'pergunta_id' => '11', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '43'],
            ['fase_id' => '5', 'pergunta_id' => '11', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '44'],
            ['fase_id' => '5', 'pergunta_id' => '11', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 6

        Resposta::updateOrCreate(
            ['id' => '45'],
            ['fase_id' => '6', 'pergunta_id' => '12', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '46'],
            ['fase_id' => '6', 'pergunta_id' => '12', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '47'],
            ['fase_id' => '6', 'pergunta_id' => '12', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '48'],
            ['fase_id' => '6', 'pergunta_id' => '12', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 7

        Resposta::updateOrCreate(
            ['id' => '49'],
            ['fase_id' => '7', 'pergunta_id' => '13', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '50'],
            ['fase_id' => '7', 'pergunta_id' => '13', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '51'],
            ['fase_id' => '7', 'pergunta_id' => '13', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '52'],
            ['fase_id' => '7', 'pergunta_id' => '13', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 8

        Resposta::updateOrCreate(
            ['id' => '53'],
            ['fase_id' => '8', 'pergunta_id' => '14', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '54'],
            ['fase_id' => '8', 'pergunta_id' => '14', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '55'],
            ['fase_id' => '8', 'pergunta_id' => '14', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '56'],
            ['fase_id' => '8', 'pergunta_id' => '14', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );

        //Fase 9

        Resposta::updateOrCreate(
            ['id' => '57'],
            ['fase_id' => '9', 'pergunta_id' => '15', 'desc' => 'resposta 1, correta', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '58'],
            ['fase_id' => '9', 'pergunta_id' => '15', 'desc' => 'resposta 2, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '59'],
            ['fase_id' => '9', 'pergunta_id' => '15', 'desc' => 'resposta 3, errada', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '60'],
            ['fase_id' => '9', 'pergunta_id' => '15', 'desc' => 'resposta 4, errada', 'correta' => '0']
        );
    }
}
