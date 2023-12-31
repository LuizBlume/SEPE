<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/animations-css/mesopotamica.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Mesopotâmia</title>
    <style>
        .buttonResponder>input[type=button],
        .buttonResponder>input[type=submit] {
            border: none;
            background-color: #9c612a;
            color: #fff;
            width: 150%;
            padding: 20px;
            font-size: 18px;
            border-radius: 37px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul class="lista-nav">
                <li id="link-home"><a href="../paginas/index.php">HOME</a></li>
                <li>
                    <a href="#">QUIZ <span id="seta-baixo">&darr;</span></a>
                    <ul class="dropdown">
                        <li id="margin-top-dropdown"><a href="egipcia.php">Egípcia</a></li>
                        <li class="link-dropdown" id="linkGrecia"><a href="grega.php">Grécia</a></li>
                        <li class="link-dropdown"id="linkHindu"><a href="hindu.php">Hindu</a></li>
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.php">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.php">Japonesa</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.php">Nórdica</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.php">Geral</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.php">Romana</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/mesopotamica.html">MITOLOGIA MESOPOTÂMICA</a></li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="../../../back/processar.php" id="formulario_quiz" method="post">
            <section id="introducao">
                <h1>Antes de começar vamos explicar como ira funcionar o quiz:</h1>
                <ol>
                    <li>O quiz terá 10 perguntas, essas perguntas serão separadas em 3 niveis: fácil, intermediário e díficil. Serão 3 perguntas fáceis, 3 perguntas intermediárias e 4 perguntas difíceis.</li>
                    <li>Cada pergunta terá 4 alternativas: A, B, C e D</li>
                    <li>Orientação: As respostas para as perguntas estarão todas nos textos da página da respectiva mitologia, então leia os textos antes de fazer o quiz!</li>
                    <li>E por último, é proibido pesquisar as respostas no google!</li>
                </ol>
                <h2>Eae, está preparado(a)? Então vamos começar!</h2>
                <input type="button" value="COMEÇAR" id="btnComecar">
            </section>
            <section id="secao-pergunta-1">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 1:</h1>
                    <p class="pergunta">Quem dos deuses é considerado “Deus(a) da Lua” na mitologia 
                        mesopotâmica?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Anu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Sin</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Ninhursag</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Enki</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta1">
                    </div>
                </div>
            </section>
            <section id="res-certa">
                <div id="fraseCerta">
                    <h1>Resposta Certa!</h1>
                </div>
                <div class="proximo">
                    <input type="button" value="Próximo" id="btnCerta1"> <span>&rarr;</span>
                </div>
            </section>
            <section id="res-errada">
                <div id="fraseErrada">
                    <h1>Resposta Errada!</h1>
                </div>
                <div class="proximo">
                    <input type="button" value="Próximo" id="btnErrada1"><span>&rarr;</span>
                </div>
            </section>
            <section id="secao-pergunta-2">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 2:</h1>
                    <p class="pergunta">Qual é o nome do antigo poema épico da Mesopotâmia que conta a história de Gilgamesh?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - A Odisséia</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - A Eneida</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - A Ilíada</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>D - A Epopeia de Gilgamesh</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Quem foi o lendário rei que governou a cidade de Uruk e é o protagonista de 
                        uma das obras literárias mais antigas da humanidade?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Enkidu</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Gilgamesh</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Inanna</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Shtar</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Qual é a história da criação do mundo na mitologia mesopotâmica, e qual deus desempenha um papel fundamental nesse mito? </p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - O mundo foi criado por Enlil, o deus do ar.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="certo">
                        <label> B - Marduk, o deus da sabedoria, cria o mundo a partir do corpo de um monstro.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> C - O mundo foi criado por Ninhursag, a deusa da fertilidade.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> D - Na mitologia mesopotâmica, o mundo é concebido como uma realidade eterna e atemporal, onde não existe um relato singular de criação, mas sim uma visão cíclica da existência.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>
            
            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Quem é Ishtar na mitologia mesopotâmica e qual é o seu papel nas histórias mitológicas?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Ishtar é a deusa da agricultura que controla as colheitas.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Ishtar é a deusa do amor e da guerra, frequentemente associada a Vênus, mas também é conhecida por ser a deusa da astrologia e da previsão do tempo nas histórias mitológicas mesopotâmicas</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label> C - Ishtar é a mãe de todos os deuses na mitologia mesopotâmica.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label> D - Ishtar é a deusa do amor e da guerra, frequentemente associada a Vênus.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta" id="ajustePergunta6">Qual era o principal propósito da construção dos zigurates na antiga Mesopotâmia?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Templos religiosos e centros cerimoniais</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B- Residências para a nobreza</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C- Escolas de filosofia</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D- Estações de comércio e troca</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta" id="ajustePergunta7">Qual foi o papel do deus Enki (também conhecido como Ea) na mitologia mesopotâmica e como suas ações afetaram a humanidade?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Ea era o deus da guerra e liderou exércitos divinos contra os deuses rebeldes, 
                        garantindo a segurança da humanidade.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Ele era o deus da sabedoria e conhecimento, e muitas vezes interveio para 
                        proteger e aconselhar os humanos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Ea era o governante supremo dos deuses e exercia controle absoluto sobre a vida 
                        e a morte dos mortais.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ele era o deus das artes e inspirava os humanos a criar obras de arte e literatura 
                        para celebrar os deuses.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta" id="ajustePergunta8">Como o herói Gilgamesh está relacionado aos deuses na mitologia mesopotâmica?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Gilgamesh era um semideus nascido da união de um deus menor com uma deusa maior, o que lhe conferiu habilidades especiais.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label> B - Gilgamesh era dois terços deus e um terço humano, o que lhe conferia força e sabedoria.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Gilgamesh era um rei escolhido pelos deuses para liderar os humanos na Terra.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Gilgamesh era um aliado dos deuses e ajudou-os a manter o equilíbrio no mundo mitológico.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">O que acontece com o herói Gilgamesh no final da "Epopeia de Gilgamesh"?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Ele aceita sua mortalidade e retorna a Uruk como um rei sábio.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Ele se torna um deus imortal.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Ele é amaldiçoado pelos deuses e se transforma em uma estátua de pedra.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ele é derrotado em uma batalha final contra Huwawa.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta" id="ajustePergunta10">Como a mitologia mesopotâmica influenciou a civilização da Mesopotâmia na antiguidade?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - A mitologia mesopotâmica foi um mero elemento folclórico sem relevância na vida cotidiana das antigas civilizações da Mesopotâmia.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - A mitologia mesopotâmica era apenas um elemento superficial nas práticas culturais e religiosas da época, frequentemente obscurecido por outras influências.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - A mitologia mesopotâmica desempenhou um papel central na religião, na arte e nas práticas culturais da região.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - A mitologia mesopotâmica desempenhou um papel secundário em relação a outras crenças e mitologias, mas ainda assim deixou vestígios em algumas áreas da cultura mesopotâmica.</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "6"; ?>
            
                    <div class="buttonResponder">
                        <input type="submit" value="Terminar" id="btnPergunta10" name="submit">
                    </div>
                </div>
            </section>
        </form>

        <section id="fim">
            <h1>Fim, obrigado por participar!</h1>

            <p id="acertos"></p>
        </section>
    </main>
    
    <script>
        function submitForm() {
            let form = document.getElementById("formulario_quiz");
            let formData = new FormData(form);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '../../../back/processar.php', true);
            xhr.onload = function () {
                if (xhr.status === 200) {
                    window.location.href = '../../../back/processar.php';
                } else {
                    console.log('Erro ao processar o formulário');
                }
            };
            xhr.send(formData);
        }
    </script>
</body>
</html>