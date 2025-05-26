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
            ['pergunta_id' => '1', 'desc' => 'II, apenas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '2'],
            ['pergunta_id' => '1', 'desc' => 'III, apenas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '3'],
            ['pergunta_id' => '1', 'desc' => 'I e II, apenas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '4'],
            ['pergunta_id' => '1', 'desc' => 'I e III, apenas.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '5'],
            ['pergunta_id' => '1', 'desc' => 'I, II e III', 'correta' => '0']
        );
        
        //Fase 2

        Resposta::updateOrCreate(
            ['id' => '6'],
            ['pergunta_id' => '2', 'desc' => 'O software deve ser operacionalizado no sistema Linux.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '7'],
            ['pergunta_id' => '2', 'desc' => 'O tempo de desenvolvimento não deve ultrapassar seis meses.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '8'],
            ['pergunta_id' => '2', 'desc' => 'O software deve emitir relatórios de compras a cada quinze dias', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '9'],
            ['pergunta_id' => '2', 'desc' => 'O tempo de resposta do sistema não deve ultrapassar 30 segundos.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '10'],
            ['pergunta_id' => '2', 'desc' => 'A base de dados deve ser protegida para acesso apenas de usuários autorizados', 'correta' => '0']
        );

        //Fase 3

        Resposta::updateOrCreate(
            ['id' => '11'],
            ['pergunta_id' => '3', 'desc' => 'R1, R2 e R3.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '12'],
            ['pergunta_id' => '3', 'desc' => 'R1, R2 e R5.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '13'],
            ['pergunta_id' => '3', 'desc' => 'R1, R3 e R4.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '14'],
            ['pergunta_id' => '3', 'desc' => 'R2, R4 e R5.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '15'],
            ['pergunta_id' => '3', 'desc' => 'R3, R4 e R5.', 'correta' => '0']
        );

        //Fase 4

        Resposta::updateOrCreate(
            ['id' => '16'],
            ['pergunta_id' => '4', 'desc' => 'joint application design.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '17'],
            ['pergunta_id' => '4', 'desc' => 'PIECES (perfomance informação / dados economia controle eficiência e serviços).', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '18'],
            ['pergunta_id' => '4', 'desc' => 'facilitaded application specification techniques.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '19'],
            ['pergunta_id' => '4', 'desc' => 'entrevista.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '20'],
            ['pergunta_id' => '4', 'desc' => 'brainstorming.', 'correta' => '1']
        );

        //Fase 5

        Resposta::updateOrCreate(
            ['id' => '21'],
            ['pergunta_id' => '5', 'desc' => 'elaboram e utilizam padrões de codificação conjuntamente, os quais, quando utilizados corretamente e apropriadamente, reduzem problemas individuais.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '22'],
            ['pergunta_id' => '5', 'desc' => 'estão acostumados ao desenvolvimento e à propriedade coletiva, limitando-se a fazer pequenas mudanças na ocorrência de erros em tempo de execução.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '23'],
            ['pergunta_id' => '5', 'desc' => 'minimizam os riscos de insucesso no projeto através da utilização de ferramentas para a geração automática de testes funcionais e protótipos de interface.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '24'],
            ['pergunta_id' => '5', 'desc' => 'escrevem testes em separado e discutem os resultados posteriormente, o que dá a eles a chance de se sintonizarem antes de começarem a implementação.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '25'],
            ['pergunta_id' => '5', 'desc' => 'trabalham em projetos complexos onde a codificação seja desenvolvida de forma conjunta, minimizando erros e agregando valor onde quer que o sistema necessite.', 'correta' => '0']
        );

        //Fase 6

        Resposta::updateOrCreate(
            ['id' => '26'],
            ['pergunta_id' => '6', 'desc' => 'I e II.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '27'],
            ['pergunta_id' => '6', 'desc' => 'I e III.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '28'],
            ['pergunta_id' => '6', 'desc' => 'II e IV.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '29'],
            ['pergunta_id' => '6', 'desc' => 'I, III e IV.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '30'],
            ['pergunta_id' => '6', 'desc' => 'II, III e IV.', 'correta' => '0']
        );

        //Fase 7

        Resposta::updateOrCreate(
            ['id' => '31'],
            ['pergunta_id' => '7', 'desc' => 'As duas asserções são proposições verdadeiras, e a segunda é uma justificativa correta da primeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '32'],
            ['pergunta_id' => '7', 'desc' => 'As duas asserções são proposições verdadeiras, mas a segunda não é uma justificativa correta da primeira.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '33'],
            ['pergunta_id' => '7', 'desc' => 'A primeira asserção é uma proposição verdadeira, e a segunda, uma proposição falsa.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '34'],
            ['pergunta_id' => '7', 'desc' => 'A primeira asserção é uma proposição falsa, e a segunda, uma proposição verdadeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '35'],
            ['pergunta_id' => '7', 'desc' => 'Tanto a primeira quanto a segunda asserções são proposições falsas.', 'correta' => '0']
        );

        //Fase 8

        Resposta::updateOrCreate(
            ['id' => '36'],
            ['pergunta_id' => '8', 'desc' => 'I e III', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '37'],
            ['pergunta_id' => '8', 'desc' => 'II e III', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '38'],
            ['pergunta_id' => '8', 'desc' => 'II e IV', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '39'],
            ['pergunta_id' => '8', 'desc' => 'I, II e IV', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '40'],
            ['pergunta_id' => '8', 'desc' => 'I, III e IV', 'correta' => '0']
        );

        //Fase 9

        Resposta::updateOrCreate(
            ['id' => '41'],
            ['pergunta_id' => '9', 'desc' => 'I e II', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '42'],
            ['pergunta_id' => '9', 'desc' => 'I e III', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '43'],
            ['pergunta_id' => '9', 'desc' => 'II e IV', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '44'],
            ['pergunta_id' => '9', 'desc' => 'I, III e IV', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '45'],
            ['pergunta_id' => '9', 'desc' => 'II, III e IV', 'correta' => '0']
        );

        //Fase 10

        Resposta::updateOrCreate(
            ['id' => '46'],
            ['pergunta_id' => '10', 'desc' => 'Documento de entrevista com usuários; modelo de caso de uso para os requisitos funcionais; prototipação de telas.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '47'],
            ['pergunta_id' => '10', 'desc' => 'Documento de estudo de viabilidade; modelo de caso de uso para os requisitos funcionais; prototipação de telas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '48'],
            ['pergunta_id' => '10', 'desc' => 'Matriz de rastreabilidade; modelo de caso de uso para os requisitos não-funcionais; prototipação de telas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '49'],
            ['pergunta_id' => '10', 'desc' => 'Documento de entrevista com usuários; modelo de caso de uso para os requisitos não-funcionais; matriz de rastreabilidade.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '50'],
            ['pergunta_id' => '10', 'desc' => 'Documento de estudo de viabilidade; modelo de caso de uso para os requisitos funcionais; matriz de rastreabilidade.', 'correta' => '0']
        );

        //Fase 11

        Resposta::updateOrCreate(
            ['id' => '51'],
            ['pergunta_id' => '11', 'desc' => 'I e IV.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '52'],
            ['pergunta_id' => '11', 'desc' => 'I, II e IV.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '53'],
            ['pergunta_id' => '11', 'desc' => 'I, III e V.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '54'],
            ['pergunta_id' => '11', 'desc' => 'II, III e V.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '55'],
            ['pergunta_id' => '11', 'desc' => 'II, III, IV e V.', 'correta' => '0']
        );

        //Fase 12

        Resposta::updateOrCreate(
            ['id' => '56'],
            ['pergunta_id' => '12', 'desc' => 'As duas asserções são proposições verdadeiras, e a segunda é uma justificativa correta da primeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '57'],
            ['pergunta_id' => '12', 'desc' => 'As duas asserções são proposições verdadeiras, mas a segunda não é uma justificativa correta da primeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '58'],
            ['pergunta_id' => '12', 'desc' => 'A primeira asserção é uma proposição verdadeira, e a segunda, uma proposição falsa.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '59'],
            ['pergunta_id' => '12', 'desc' => 'A primeira asserção é uma proposição falsa, e a segunda, uma proposição verdadeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '60'],
            ['pergunta_id' => '12', 'desc' => 'Tanto a primeira quanto a segunda asserções são proposições falsas.', 'correta' => '0']
        );

        //Fase 13

        Resposta::updateOrCreate(
            ['id' => '61'],
            ['pergunta_id' => '13', 'desc' => 'As duas asserções são proposições verdadeiras, e a segunda é uma justificativa correta da primeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '62'],
            ['pergunta_id' => '13', 'desc' => 'As duas asserções são proposições verdadeiras, mas a segunda não é justificativa correta da primeira.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '63'],
            ['pergunta_id' => '13', 'desc' => 'A primeira asserção é uma proposição verdadeira, e a segunda, uma proposição falsa.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '64'],
            ['pergunta_id' => '13', 'desc' => 'A primeira asserção é uma proposição falsa, e a segunda, uma proposição verdadeira.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '65'],
            ['pergunta_id' => '13', 'desc' => 'Tanto a primeira quanto a segunda são proposições falsas.', 'correta' => '0']
        );

        //Fase 14

        Resposta::updateOrCreate(
            ['id' => '66'],
            ['pergunta_id' => '14', 'desc' => 'I e II.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '67'],
            ['pergunta_id' => '14', 'desc' => 'II e III.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '68'],
            ['pergunta_id' => '14', 'desc' => 'III e IV.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '69'],
            ['pergunta_id' => '14', 'desc' => 'I, II e IV.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '70'],
            ['pergunta_id' => '14', 'desc' => 'I, III e IV.', 'correta' => '0']
        );

        //Fase 15

        Resposta::updateOrCreate(
            ['id' => '71'],
            ['pergunta_id' => '15', 'desc' => 'Leito é uma subclasse de UTI.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '72'],
            ['pergunta_id' => '15', 'desc' => ' O método registraPaciente() é implementado por Paciente.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '73'],
            ['pergunta_id' => '15', 'desc' => 'Todos os objetos foram criados no instante de execução do Caso de Uso representado.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '74'],
            ['pergunta_id' => '15', 'desc' => ' O diagrama apresenta um erro ao não representar as mensagens de retorno depois da destruição dos objetos.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '75'],
            ['pergunta_id' => '15', 'desc' => 'A mensagem 4 pode ser substituída pelo estereótipo <<create>> sem causar prejuízo à interpretação correta do Diagrama de Sequência representado.', 'correta' => '1']
        );

        //Fase 16

        Resposta::updateOrCreate(
            ['id' => '76'],
            ['pergunta_id' => '16', 'desc' => 'I, apenas', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '77'],
            ['pergunta_id' => '16', 'desc' => 'II, apenas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '78'],
            ['pergunta_id' => '16', 'desc' => 'I e III, apenas.', 'correta' => '0']
        );

        Resposta::updateOrCreate(
            ['id' => '79'],
            ['pergunta_id' => '16', 'desc' => 'II e III, apenas.', 'correta' => '1']
        );

        Resposta::updateOrCreate(
            ['id' => '80'],
            ['pergunta_id' => '16', 'desc' => 'I, II e III.', 'correta' => '0']
        );
    }
}
