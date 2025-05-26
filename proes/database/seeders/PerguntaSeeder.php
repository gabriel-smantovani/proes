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
            ENADE 2017 – ADS – (Engenharia de Software) QUESTÃO 21

            Os modelos de processo foram propostos para trazer ordem ao caos existente na área de desenvolvimento de software. A história mostra que esses modelos trouxeram considerável contribuição no trabalho da engenharia de software.
            PRESSMAN, R. S. Engenharia de Software: uma abordagem profissional. 8. ed. Porto Alegre: AMGH, 2016 (adaptado).
            
            A respeito dos modelos de processo, avalie as afirmações a seguir.

            I. São atividades do modelo incremental: especificação, desenvolvimento e validação.
            II. No modelo espiral, a fase de modelagem é responsável, entre outras atividades, pela estimativa, cronograma e análise de risco.
            III. O modelo cascata sugere uma abordagem sequencial e sistemática para o desenvolvimento de software, iniciando na especificação de requisitos e finalizando com a entrega do software concluído.
            É correto o que se afirma em
            TEXT
            ],
        );

        Pergunta::updateOrCreate(
            ['id' => '2'],
            ['fase_id' => '2', 'desc' => <<<TEXT
            ENADE 2021 – ADS – (ENGENHARIA DE SOFTWARE) QUESTÃO 09

            A etapa de definição de requisitos é voltada para estabelecer quais as funções são requeridas pelo sistema e as restrições sobre a operação e o desenvolvimento do software. Os requisitos de software podem ser classificados como requisitos funcionais e não funcionais.
            SOMMERVILLE, I. Engenharia de Software, 10. ed. São Paulo: Pearson Education, 2019 (adaptado).

            Considerando as informações do texto, assinale a alternativa em que o item é um requisito funcional.
            TEXT
            ],
        );

        Pergunta::updateOrCreate(
            ['id' => '3'],
            ['fase_id' => '2', 'desc' => <<<TEXT
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
            ['id' => '4'],
            ['fase_id' => '3', 'desc' => <<<TEXT
            ENADE 2008-17 – ADS – (Engenharia de Software)

            Os alunos de uma disciplina deveriam escolher um sistema de média complexidade, contendo no mínimo 100 funcionalidades, para ser modelado em UML e codificado em uma linguagem orientada a objetos. Um dos grupos de alunos estabeleceu a seguinte estratégia para identificação e seleção do sistema.

            I. Cada integrante do grupo deveria criar um nickname (apelido) em um software de chat.
            II. O grupo deveria se reunir em um horário predeterminado.
            III. Durante o chat, os seguintes procedimentos deveriam ser realizados:
            
            • cada integrante deveria sugerir um ou mais sistemas e justificar sua escolha, e não poderia criticar as idéias dos outros;
            • à medida que as idéias fossem digitadas, o líder deveria copiá-las para um editor de texto e controlar o tempo de sugestão;
            • quando o limite de tempo fosse atingido, o líder disponibilizaria todas as sugestões para serem analisadas pelo grupo;
            • as 5 melhores idéias seriam selecionadas e colocadas em votação para a escolha da melhor idéia, segundo critérios predefinidos.
            
            Nessa situação, a estratégia utilizada pelo grupo de alunos é uma adaptação da técnica de levantamento e elicitação de requisitos denominada
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '5'],
            ['fase_id' => '3', 'desc' => <<<TEXT
            ENADE 2011-10 – ADS – (Engenharia de Software)
            
            Várias técnicas relacionadas à programação extrema (XP) são diretamente ligadas ao código, incluindo a refatoração, programação em pares e integração contínua. A programação em pares é a prática preferida dos desenvolvedores XP trabalhando em pares em um computador.
            SCOTT, K. O Processo Unificado Explicado. Porto Alegre: Artmed, 2002. BECK, K. Programação Extrema (XP) Explicada. Porto Alegre: Artmed, 2000.

            programação em pares auxilia no desenvolvimento de código de melhor qualidade quando os pares
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '6'],
            ['fase_id' => '3', 'desc' => <<<TEXT
            ENADE 2011-9 – ADS – (Engenharia de Software)

            O levantamento de requisitos é uma etapa fundamental do projeto de sistemas. Dependendo da situação encontrada, uma ou mais técnicas podem ser utilizadas para a elicitação dos requisitos. A respeito dessas técnicas, analise as afirmações a seguir.
            
            I. Workshop de requisitos consiste na realização de reuniões estruturadas e delimitadas entre os analistas de requisitos do projeto e representantes do cliente.
            II. Cenário consiste na observação das ações do funcionário na realização de uma determinada tarefa, para verificar os passos necessários para sua conclusão.
            III. As entrevistas são realizadas com os stakeholders e podem ser abertas ou fechadas.
            IV. A prototipagem é uma versão inicial do sistema, baseado em requisitos levantados em outros sistemas da organização.
            
            É correto apenas o que se afirma em
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '7'],
            ['fase_id' => '4', 'desc' => <<<TEXT
            ENADE 2011-11 – ADS – (Engenharia de Software)
            
            O conjunto de casos de uso representa as possíveis interações que serão representadas nos requisitos do sistema. A figura a seguir desenvolve um exemplo de biblioteca e mostra outros casos de uso (use-cases) nesse ambiente.

            • Usuário da biblioteca interage com os Serviços de empréstimo e Administração de usuário.
            • Pessoal da biblioteca interage com a Administração de usuário e os Serviços de catálogo.
            • Fornecedor interage com Serviços de catálogo.

            SOMMERVILLE, I. Engenharia de software. 6. ed. São Paulo:Makron Books, 2003, p. 113.
            
            Com relação ao tema, analise as asserções a seguir.
            
            A figura também ilustra os pontos essenciais da notação de casos de uso. Os agentes no processo são representados por bonecos e cada tipo de interação é representada por uma elipse com um nome

            PORQUE
            
            a UML é um padrão para a modelagem orientada a objetos e, assim, os casos de uso e a obtenção de requisitos com base em casos de uso são cada vez mais utilizados para obter requisitos. Acerca dessas asserções, assinale a opção correta.
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '8'],
            ['fase_id' => '5', 'desc' => <<<TEXT
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
            ['id' => '9'],
            ['fase_id' => '5', 'desc' => <<<TEXT
            ENADE 2017 – ADS – (Engenharia de Software) QUESTÃO 22
            
            Um desenvolvedor de software recém−formado foi contratado para a implementação de um projeto em uma empresa e, em reunião, recebeu várias explicações sobre como a gerência de configuração funcionava.
            Considerando essa situação, avalie as afirmações a seguir, referentes às informações dadas ao desenvolvedor.

            I. Inicialmente, para ter acesso à base de desenvolvimento, o profissional deve realizar uma operação de checkout para baixar os arquivos do projeto que estão armazenados no servidor.
            II. Na situação em que mais de um desenvolvedor estiver modificando um mesmo documento, ao se tentar realizar uma operação de commit, pode ser necessário realizar uma operação de tag (release) para resolução do conflito entre a versão local e a versão mais recente no repositório, caso algum desenvolvedor tenha submetido uma mudança no documento previamente.
            III. No desenvolvimento de um novo caso de uso, em que diversos arquivos sejam modificados, é recomendada a criação de uma ramificação (branch).
            IV. A versão estável é o ramo principal de desenvolvimento, que segue do começo do desenvolvimento até o momento presente.
            
            É correto apenas o que se afirma em
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '10'],
            ['fase_id' => '5', 'desc' => <<<TEXT
            ENADE 2021 – ADS – (Engenharia de Software) QUESTÃO 18
            
            A engenharia de requisitos é uma área que inclui quatro subprocessos relacionados de alto nível. Esses subprocessos são: 1) avaliação se o sistema será útil para a empresa (estudo de viabilidade); 2) obtenção de requisitos (elicitação de requisitos); 3) conversão desses requisitos em alguma forma padrão (especificação); 4) verificação se os requisitos realmente definem o sistema que o cliente deseja (validação).
            SOMMERVILLE, I. Engenharia de Software. São Paulo: Pearson Addison-Wesley, 2017 (adaptado).

            Uma equipe de Tecnologia da Informação de uma empresa de consultoria desenvolverá um software de Suporte Técnico para uma grande empresa fornecedora de equipamentos eletrônicos. O estudo de viabilidade do software já foi realizado e aprovado. A equipe de Tecnologia da Informação seguirá os três subprocessos seguintes de alto nível de engenharia de requisitos descritos no texto de Sommerville, ou seja, os subprocessos de elicitação de requisitos, especificação e validação.

            Para esses três subprocessos, quais são os artefatos que podem ser utilizados por essa equipe de Tecnologia da Informação?
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '11'],
            ['fase_id' => '6', 'desc' => <<<TEXT
            ENADE 2021 – ADS – (Engenharia de Software) QUESTÃO 31

            Foi solicitado o desenvolvimento de um software para o controle e gestão das matrículas dos alunos em uma universidade. Os alunos poderão realizá-las diretamente no sistema, em um terminal a ser disponibilizado na universidade. Além dessas características, o sistema deverá considerar as restrições representadas no diagrama a seguir:

            • Aluno realiza matrícula.
            • Realizar matrícula extende Realizar matrícula fora do prazo.
            • Realizar matrícula inclui Validar aluno.
            • Validar aluno está relacionado a validar via retina e validar via digital.

            Com base no texto e no diagrama, avalie as afirmações a seguir.
            
            I. O aluno poderá realizar a matrícula fora do prazo e as tratativas são as mesmas da matrícula feita dentro do prazo.
            II. O aluno poderá, opcionalmente, realizar a matrícula fora do prazo.
            III. O sistema, obrigatoriamente, deverá validar o aluno que realizar a matrícula fora do prazo.
            IV. A validação do aluno deverá ser feita a partir da sua matrícula informada no sistema.
            V. A validação do aluno, a ser feita por retina, é diferente da validação feita pela digital.

            É correto apenas o que se afirma em
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '12'],
            ['fase_id' => '6', 'desc' => <<<TEXT
            ENADE 2011-27 – ADS – (Engenharia de Software)
            
            Modelos de ciclo de vida de processo de software são descrições abstratas do processo de desenvolvimento, mostrando as principais atividades e informações usadas na produção e manutenção de software, bem como a ordem em que as atividades devem ser executadas.
            Com relação aos modelos de ciclo de vida de processo de software, analise as seguintes asserções.

            O modelo de desenvolvimento em cascata acrescenta aspectos gerenciais (planejamento, controle e tomada de decisão) ao processo de desenvolvimento de software

            PORQUE

            considera que o processo é composto por várias etapas que são executadas de forma sistemática e sequencial.

            Acerca dessas asserções, assinale a opção correta.
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '13'],
            ['fase_id' => '7', 'desc' => <<<TEXT
            ENADE 2008-16 – ADS – (Engenharia de Software)
            
            O rational unified process (RUP) é um processo de engenharia de software cujo objetivo é assegurar a produção de software de alta qualidade, satisfazendo as necessidades dos usuários no prazo e nos custos previstos. O RUP contém uma estrutura que pode ser adaptada e estendida, pois é formado por duas estruturas principais, denominadas dimensões, que representam os aspectos dinâmicos e estáticos do processo. O aspecto dinâmico é expresso em ciclos, fases, iterações e marcos. O estático, por sua vez, contém as disciplinas, os fluxos, os artefatos e os trabalhadores. Com base na iteração do RUP, julgue as asserções a seguir.

            A cada iteração das fases do RUP, geram-se ou não artefatos de software

            PORQUE

            os artefatos produzidos dependem da ênfase que é dada a cada disciplina.

            Assinale a opção correta.
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '14'],
            ['fase_id' => '8', 'desc' => <<<TEXT
            ENADE 2011-14 – ADS – (Engenharia de Software)
            
            O diagrama de atividades é um dos diagramas disponíveis na UML (Linguagem de Modelagem Unificada) para a modelagem de aspectos dinâmicos de sistemas.

            Diagrama de atividade em questão.

            Com relação ao diagrama de atividades apresentado, avalie as afirmações a seguir.
            
            I. A atividade 05 será executada se a atividade 03 ou a atividade 04 for concluída.
            II. A ramificação sequencial existente após a atividade 02 significa que, caso o fluxo seja [não], é necessário que sejam executadas novamente as atividades 01 e 02.
            III. As atividades 03 e 04 vão ter início ao mesmo tempo, entretanto, não significa que terminarão ao mesmo tempo.
            IV. Caso o fluxo da ramificação sequencial existente após a atividade 02 tenha o fluxo [sim], a atividade 02 não será mais executada.
            
            É correto apenas o que afirma em
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '15'],
            ['fase_id' => '8', 'desc' => <<<TEXT
            ENADE 2021 – ADS-16 – (Engenharia de Software)
            
            Uma ONG decidiu construir um hospital de campanha para tratamento de pacientes diagnosticados com a Covid-19. Para auxiliar na gerência hospitalar, a ONG contratou alguns programadores voluntários para desenvolver um Sistema de Suporte à Decisão para Gestão Hospitalar. Esse sistema irá auxiliar no registro de todos os procedimentos diários realizados no paciente que dá entrada no hospital, desde sua internação até a saída, seja essa saída por recebimento de alta, por transferência ou óbito. O sistema foi todo desenvolvido em Java de acordo com o Paradigma Orientado a Objetos. Durante o curto processo de análise, devido à urgência, foram construídos diversos diagramas em UML (Unified Modeling Language). Um desses diagramas relaciona a interação entre os objetos do sistema, o Diagrama de Sequência. Esse diagrama é apresentado a seguir.
            
            Diagrama de sequência em questão.

            Considerando o Diagrama de Sequência apresentado, assinale a opção correta.
            TEXT]
        );

        Pergunta::updateOrCreate(
            ['id' => '16'],
            ['fase_id' => '9', 'desc' => <<<TEXT
            ENADE 2014-23 – ADS – (Engenharia de Software)
            
            Os termos inovação e empreendedorismo dizem respeito à prática da gestão e à mudança criativa. A inovação preocupa−se, sobretudo, com o desenvolvimento de produtos. Já o empreendedorismo dedica−se mais à questão da criação de pequenas empresas.

            Nesse contexto, avalie as afirmações a seguir.
            
            I. Inovação e sustentabilidade são processos antagônicos, já que a inovação contribui de forma importante para a degradação do meio ambiente devido à sua associação com o aumento do crescimento econômico e do consumo.
            II. A exploração de um problema social transformado em uma oportunidade de negócio visando a geração de lucro ao empreendedor é um dos principais objetivos do empreendedorismo social.
            III. Nem todo resultado de um processo criativo está associado a uma inovação.

            É correto o que se afirma em
            TEXT]
        );
    }
}
