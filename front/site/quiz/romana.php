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
    <link rel="stylesheet" href="css-quiz/animations-css/romana.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Roma</title>
    <style>
        .buttonResponder>input[type=button],
        .buttonResponder>input[type=submit] {
            border: none;
            background-color: #A61212;
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
                        <li class="link-dropdown" id="linkGrecoRomana"><a href="japonesa.php">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.php">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.php">Nórdica</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.php">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/romana.html">MITOLOGIA ROMANA</a></li>
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
                    <p class="pergunta">Quem era a deusa romana do amor e da beleza?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Ceres</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Vênus</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Cibele</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Diana</label>
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
                    <p class="pergunta">Qual deus romano era associado ao comércio, viajantes e ladrões?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Mercúrio</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Júpiter</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Netuno</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Plutão</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Quem é o deus romano dos mares, equivalente a Poseidon na mitologia grega?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Aegir</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Urano</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Mercúrio</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label> D - Netuno</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Explique como a mitologia romana absorveu elementos da mitologia grega e quais deuses romanos correspondem aos deuses gregos mais importantes.</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A mitologia romana mescla elementos gregos e romanos, com deuses romanos correspondentes aos gregos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="certo">
                        <label>A mitologia romana foi influenciada e enriquecida pela mitologia grega, incorporando divindades romanas equivalentes às divindades gregas mais importantes.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>A mitologia romana se originou da influência grega, gerando deuses romanos paralelos aos gregos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>A mitologia romana sinergizou com a grega, criando deidades romanas que compartilham características com os deuses gregos.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>
            
            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Qual é a lenda da fundação de Roma e quem são os irmãos gêmeos envolvidos nela?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Os irmãos gêmeos são Rômulo e Remo, que foram criados por uma loba, e a história envolve sua rivalidade na escolha do local para fundar a cidade de Roma.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - A fundação de Roma é atribuída a um grupo de três irmãos, cada um com habilidades mágicas, que juntos conjuraram a cidade a partir do nada.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label> C - Os irmãos gêmeos na lenda de fundação de Roma são Castor e Pólux, que tiveram uma disputa lendária que levou à criação da cidade.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label> D - Na lenda da fundação de Roma, os irmãos gêmeos são Cástor e Pólux, associados à constelação de Gêmeos, que, através de uma jornada heroica, unem forças para estabelecer a cidade de Roma.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta">Quem é o deus romano dos mensageiros, das estradas e dos viajantes?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Hades</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Marte</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Mercúrio</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Plutão</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta">Qual dos seguintes deuses romanos era frequentemente representado com
                        um martelo, associado à forja e à metalurgia?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Marte, o deus da guerra e da agricultura</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label> B - Vulcano, o deus do fogo e da metalurgia</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Plutão, o deus do submundo e dos mortos
                        </label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Mercúrio, o deus do comércio e dos viajantes</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta">Qual é a história do mito de Rômulo e Remo e como ela se relaciona com a fundação de Roma?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Rômulo e Remo são irmãos gêmeos que, de acordo com a lenda, foram criados por uma loba. No entanto, essa narrativa é frequentemente interpretada como uma metáfora para a influência da natureza selvagem na formação da sociedade romana, representando a dualidade entre a civilização e a barbárie.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Rômulo e Remo inicialmente aliados, mas divergências políticas levaram a um conflito mortal, representando rivalidades políticas.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label> C - O mito de Rômulo e Remo não está diretamente ligado à fundação de Roma, mas representa temas culturais romanos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Rômulo e Remo são fundadores míticos, simbolizando lutas pelo poder e a complexidade da história de Roma.</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Qual é o nome da deusa romana da sorte, do destino e do acaso?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Minerva</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Diana</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Fortuna</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Vesta</label>
                    </div>
            
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta">Qual dos seguintes deuses é frequentemente associado à passagem das
                        estações e ao ciclo da vegetação, sendo filho de Flora e frequentemente
                        representado com um jovem portando um feixe de trigo?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Vertumno, deus das transformações e do cultivo</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Jano, deus das portas e passagens</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Saturno, deus do tempo e da agricultura</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Neptuno, deus dos mares e oceanos</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "8"; ?>
            
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