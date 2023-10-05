<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css-quiz/animations-css/grecia.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Grécia</title>
</head>
<body>
    <header>
        <nav>
            <ul class="lista-nav">
                <li id="link-home"><a href="../paginas/index.html">HOME</a></li>
                <li>
                    <a href="#">QUIZ <span id="seta-baixo">&darr;</span></a>
                    <ul class="dropdown">
                        <li id="margin-top-dropdown"><a href="egipcia.html">Egípcia</a></li>
                        <li class="link-dropdown" id="linkFenicia"><a href="fenicia.html">Fenícia</a></li>
                        <li class="link-dropdown" id="linkGrecoRomana"><a href="greco-romana.html">Greco-Romana</a></li>
                        <li class="link-dropdown"id="linkHindu"><a href="hindu.html">Hindu</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.html">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.html">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.html">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.html">Geral</a></li>
                    </ul>
                </li>
                <li id="link-grecia"><a href="../paginas/grega.html">MITOLOGIA GREGA</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="grega.php" method="post">
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
                <p class="pergunta">Quem é considerado o rei dos deuses na mitologia grega?</p>
                <p class="dificuldade">Nível Fácil</p>
            </div>
            <div class="alternativas">
                <label class="marginRadio">
                    <input type="radio" name="questao1" id="" value="errado"> A - Apolo
                </label>
                <label>
                    <input type="radio" name="questao1" id="" value="errado"> B - Ares
                </label>
                <label>
                    <input type="radio" name="questao1" id="" value="certo"> C - Zeus
                </label>
                <label>
                    <input type="radio" name="questao1" id="" value="errado"> D -Dionísio
                </label>

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
                <p class="pergunta">Qual é o nome da deusa grega da sabedoria, da estratégia e da guerra justa?</p>
                <p class="dificuldade">Nível Fácil</p>
            </div>
            <div class="alternativas">
                <label class="marginRadio">
                    <input type="radio" name="questao2" id="" value="errado"> A - Afrodite
                </label>
                <label>
                    <input type="radio" name="questao2" id="" value="certo"> B - Atena
                </label>
                <label>
                    <input type="radio" name="questao2" id="" value="errado"> C - Deméter
                </label>
                <label>
                    <input type="radio" name="questao2" id="" value="errado"> D - Héstia
                </label>

                <div class="buttonResponder">
                    <input type="button" value="Responder" id="btnPergunta2">
                </div>
            </div>
        </section>

        <section id="secao-pergunta-3">
            <div class="informacoes-questao">
                <h1 class="questao">Pergunta 3:</h1>
                <p class="pergunta">Qual é o nome do herói grego conhecido por sua força extraordinária e seus Doze Trabalhos?</p>
                <p class="dificuldade">Nível Fácil</p>
            </div>
            <div class="alternativas">
                <label class="marginRadio">
                    <input type="radio" name="questao3" id="" value="errado"> A - Perseu
                </label>
                <label>
                    <input type="radio" name="questao3" id="" value="errado"> B - Teseu
                </label>
                <label>
                    <input type="radio" name="questao3" id="" value="errado"> C - Édipo
                </label>
                <label>
                    <input type="radio" name="questao3" id="" value="certo"> D - Hércules
                </label>

                <div class="buttonResponder">
                    <input type="button" value="Responder" id="btnPergunta3">
                </div>
            </div>
        </section>

        <section id="secao-pergunta-4">
            <div class="informacoes-questao">
                <h1 class="questao">Pergunta 4:</h1>
                <p class="pergunta">Explique o mito da criação do mundo na mitologia grega, incluindo os titãs e os deuses olímpicos.</p>
                <p class="dificuldade">Nível Médio</p>
            </div>
            <div class="alternativas">
                <label class="marginRadio">
                    <input type="radio" name="questao4" id="" value="errado"> Na mitologia grega, o mundo foi criado por um único deus, Zeus.
                </label>
                <label>
                    <input type="radio" name="questao4" id="correcaoTamanho" value="certo"> Na mitologia grega, o mundo começou com o Caos, seguido pelos titãs, que foram sucedidos pelos deuses olímpicos, liderados por Zeus.
                </label>
                
                <div class="buttonResponder">
                    <input type="button" value="Responder" id="btnPergunta4">
                </div>
            </div>
         </section>
        </form>
    </main>
</body>
</html>