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
    <link rel="stylesheet" href="css-quiz/animations-css/grecia.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
        }
        .buttonResponder>input[type=button],
        .buttonResponder>input[type=submit] {
            border: none;
            background-color: #3027da;
            color: #fff;
            width: 150%;
            padding: 20px;
            font-size: 18px;
            border-radius: 37px;
            cursor: pointer;
        }
    </style>
    <title>Quiz Grécia</title>
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
                        <li class="link-dropdown" id="linkHindu"><a href="hindu.php">Hindu</a></li>
                        <li class="link-dropdown" id="linkIrlandesa"><a href="irlandesa.php">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.php">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.php">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.php">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.php">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.php">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/grega.html">MITOLOGIA GREGA</a></li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="../../../back/processar.php" method="post" id="formulario_quiz">
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
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Apolo</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Ares</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Zeus</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D -Dionísio</label>
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
                    <p class="pergunta">Qual é o nome da deusa grega da sabedoria, da estratégia e da guerra justa?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Afrodite</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Atena</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Deméter</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Héstia</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Além de ser o deus dos mares, Poseidon também era frequentemente 
                    considerado como o deus de qual outro fenômeno natural na mitologia grega?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Terremotos</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Tempestades</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Vulcões</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Furacões</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Quais eram os três irmãos primordiais que personificavam as forças básicas 
                    da natureza na mitologia grega, sendo considerados filhos de Gaia?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Urano, Cronos e Oceano</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>B - Zeus, Poseidon e Hades</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>C - Tártaro, Érebo e Nix</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label>D - Ponto, Céu e Terra</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Além de Ícaro, Dédalo também teve outro filho notável na mitologia grega. 
                    Qual era o nome deste filho e qual foi sua trágica história?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Talos, o autômato de bronze que guardava Creta e que foi derrotado por Jasão e os 
                        Argonautas.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Ífis, uma jovem que se disfarçou de homem para escapar de um destino trágico e 
                        posteriormente foi transformada em uma estátua de pedra por Cibele.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label>C - Perdix, que Dédalo empurrou do alto da Acrópole de Atenas por ciúmes de 
                        sua inteligência e foi transformado em uma perdiz por Atena.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label>D - Glauco, um pescador que se tornou um deus marinho após comer uma erva
                        mágica dada a ele por Circe.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta">Qual aspecto fundamental da natureza e da agricultura está diretamente associado a Deméter na mitologia grega?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Colheita</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Guerra</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Comércio</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Cura</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta">Qual é a história da Titanomaquia na mitologia grega e como os deuses olímpicos derrotaram os titãs?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Os titãs eram deuses mais antigos que os olímpicos e foram derrotados em uma batalha liderada por Zeus.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Os titãs eram deuses mais poderosos que os olímpicos e governaram o Olimpo antes de uma trégua ser estabelecida.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Os titãs e os olímpicos uniram forças para enfrentar ameaças externas.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Os deuses olímpicos solicitaram ajuda a outras divindades para derrotar os titãs.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta">Além de ser o deus do submundo, Hades também era frequentemente 
                    associado a qual outro elemento na mitologia grega?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Mineração e riquezas provenientes das profundezas da terra, já que o submundo 
                        era considerado a fonte desses recursos valiosos.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Os metais preciosos, particularmente o ouro e a prata, eram vistos como 
                            tesouros escondidos nas entranhas da terra, sob a supervisão de Hades.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - A invisibilidade era uma característica associada a Hades, permitindo-lhe mover-se 
                        sem ser visto, um traço muitas vezes ligado ao seu papel como deus do submundo.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - As tempestades não estão diretamente associadas a Hades na mitologia grega.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Qual das seguintes afirmações sobre as Ninfas na mitologia grega é 
                    verdadeira?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - As ninfas eram deidades masculinas na mitologia grega.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - As ninfas eram divindades na mitologia grega associadas a elementos da natureza, como árvores, água e montanhas, desempenhando papéis protetores e misteriosos.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - As ninfas eram deidades exclusivamente associadas ao Olimpo.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - As ninfas não tinham qualquer influência na natureza ou no mundo natural.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta">Como é retratado o mito de Édipo em tragédias gregas como a de Sófocles?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Édipo era um herói que realizou grandes feitos.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Édipo era um deus que se apaixonou por uma mortal.
                        </label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Édipo era um rei que matou seu pai e se casou com sua mãe, trazendo desgraça à sua cidade.</label>
                    </div>

                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Édipo era um adivinho que previu o futuro com precisão.</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "1"; ?>

                    <div class="buttonResponder">
                        <input type="submit" value="Terminar" id="btnPergunta10" name="submit">
                    </div>
                </div>
            </section>
        </form>
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