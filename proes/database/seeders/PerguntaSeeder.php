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
            ['id' => '1'],
            ['fase_id' => '1', 'desc' => <<<TEXT
            ENADE 2021 – ADS – (ENGENHARIA DE SOFTWARE) QUESTÃO 09
            A etapa de definição de requisitos é voltada para estabelecer quais as funções são requeridas pelo sistema e as restrições sobre a operação e o desenvolvimento do software. Os requisitos de software podem ser classificados como requisitos funcionais e não funcionais.
            SOMMERVILLE, I. Engenharia de Software, 10. ed. São Paulo: Pearson Education, 2019 (adaptado).
            Considerando as informações do texto, assinale a alternativa em que o item é um requisito funcional.
            TEXT
            ],
        );

        Pergunta::updateOrCreate(
            ['id' => '2'],
            ['fase_id' => '1', 'desc' => <<<TEXT
            ENADE 2017 – ADS – (ENGENHARIA DE SOFTWARE) QUESTÃO 12
            A engenharia de requisitos, do ponto de vista do processo de software, é uma ação de engenharia de software importante, que se inicia durante a atividade de comunicação e continua na de modelagem. Ela deve ser adaptada às necessidades do processo, do projeto, do produto e das pessoas que estão realizando o trabalho.
            PRESSMAN, R. S. Engenharia de software: uma abordagem profissional. 8. ed. Porto Alegre: AMGH, 2016 (adaptado).
            Considere os requisitos, a seguir, de um sistema para uma universidade, na qual se pretenda gerenciar o setor acadêmico.
            • R1: o sistema deve permitir que cada professor realize o lançamento de notas das turmas nas quais lecionou;
            • R2: o sistema deverá ser desenvolvido de forma a possibilitar seu transporte para outro sistema operacional em, no máximo, sessenta dias;
            • R3: o sistema deve permitir que um estudante realize a sua matrícula nas disciplinas oferecidas em um semestre letivo;
            • R4: o sistema atualiza a nota do estudante, permitindo sua visualização, em até dois segundos depois do momento que o professor a registra;
            • R5: o sistema deve permitir que o auxiliar de serviços acadêmicos realize o cadastro de um estudante em não mais do que dez minutos de orientação.
            TEXT
            ]
        );

        Pergunta::updateOrCreate(
            ['id' => '3'],
            ['fase_id' => '1', 'desc' => <<<TEXT
            ENADE 2021 – ADS – (ENGENHARIA DE SOFTWERE) QUESTÃO 19
            Arquitetura de software é uma representação que permite analisar a efetividade do projeto no entendimento dos requisitos declarados. Durante a fase de concepção da arquitetura, podem-se considerar alternativas de arquitetura em um estágio em que mudanças ainda são realizadas com menor esforço, diminuindo riscos associados à construção do software ainda na fase inicial.
            PRESSMAN, R. S. Engenharia de Software: uma abordagem profissional. 8. ed. Porto Alegue: AMGH, 2016 (adaptado).
            A respeito dos estilos e padrões arquiteturais contidos na engenharia de software, avalie as afirmações a seguir.
            I. Em arquiteturas orientadas a objetos, a comunicação entre os componentes do software é realizada por intermédio da troca de mensagens.
            II. As arquiteturas monolíticas consistem de um sistema dividido em pequenas partes, possibilitando que estas tenham sua manutenção, execução e evolução individual.
            III. No padrão arquitetural Modelo-Visão-Controle (MVC), a camada de Modelo armazena as interações realizadas no Controle, podendo ser apresentados/manipulados posteriormente na Visão.
            IV. Nas arquiteturas microsserviços, o software possui componentes altamente acoplados, dificultando a manutenção.
            É correto apenas o que se afirma em
            TEXT]
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
