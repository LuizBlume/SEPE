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
    <link rel="stylesheet" href="css-quiz/animations-css/egipcia.css">
    <script src="js/animacoes.js" defer></script>
    <script src="js/quiz.js" defer></script>
    <title>Quiz Egípcia</title>
    <style>
        .buttonResponder>input[type=button],
        .buttonResponder>input[type=submit] {
            border: none;
            background-color: #daba04;
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
                        <li class="link-dropdown" id="linkGrecia"><a href="grega.php">Grécia</a></li>
                        <li class="link-dropdown" id="linkHindu"><a href="hindu.php">Hindu</a></li>
                        <li id="linkIrlandesa"><a href="irlandesa.php">Irlandesa</a></li>
                        <li class="link-dropdown" id="linkJaponesa"><a href="japonesa.php">Japonesa</a></li>
                        <li id="link-dropdown-excessao"><a href="mesopotamica.php">Mesopotâmica</a></li>
                        <li class="link-dropdown" id="linkNordica"><a href="nordica.php">Nórdica</a></li>
                        <li class="link-dropdown" id="linkRomana"><a href="romana.php">Romana</a></li>
                        <li class="link-dropdown" id="linkGeral"><a href="geral.php">Geral</a></li>
                    </ul>
                </li>
                <li id="link-mitologia"><a href="../paginas/egipcia.html">MITOLOGIA EGÍPCIA</a></li>
                <li id="link-sair"><a href="../../../back/logout.php">SAIR</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <form action="../../../back/processar.php" id="formulario_quiz" method="post">
            <section id="introducao">
                <h1>Antes de começar vamos explicar como ira funcionar o quiz:</h1>
                <ol>
                    <li>O quiz terá 10 perguntas, essas perguntas serão separadas em 3 niveis: fácil, intermediário e
                        díficil. Serão 3 perguntas fáceis, 3 perguntas intermediárias e 4 perguntas difíceis.</li>
                    <li>Cada pergunta terá 4 alternativas: A, B, C e D</li>
                    <li>Orientação: As respostas para as perguntas estarão todas nos textos da página da respectiva
                        mitologia, então leia os textos antes de fazer o quiz!</li>
                    <li>E por último, é proibido pesquisar as respostas no google!</li>
                </ol>
                <h2>Eae, está preparado(a)? Então vamos começar!</h2>
                <input type="button" value="COMEÇAR" id="btnComecar">
            </section>
            <section id="secao-pergunta-1">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 1:</h1>
                    <p class="pergunta">Qual deus egípcio foi frequentemente associado como o "Rei dos Deuses" e
                        muitas vezes era representado como uma figura humana usando uma coroa dupla?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Amon</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Thoth</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Ptah</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao1" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D -Sobek</label>
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
                    <p class="pergunta">Qual é o nome da rainha lendária do Egito que se casou com Marco Antônio e Júlio
                        César?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Nefertiti</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Cleópatra</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Hatshepsut</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao2" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ísis</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta2">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-3">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 3:</h1>
                    <p class="pergunta">Qual é o animal sagrado associado a Thoth, o deus da sabedoria, na mitologia
                        egípcia?</p>
                    <p class="dificuldade">Nível Fácil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Íbis</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Gato</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Falcão</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao3" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Serpente</label>
                    </div>
                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta3">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-4">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 4:</h1>
                    <p class="pergunta">Quem se tornou juiz dos mortos após ser assassinado pelo irmão na mitologia
                        Egípcia?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Osíris</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> B - Anúbis</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> C - Thot</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao4" class="tamanhoInputOriginal" value="errado">
                        <label> D - Rá</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta4">
                    </div>
                </div>
            </section>

            <section id="secao-pergunta-5">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 5:</h1>
                    <p class="pergunta">Qual criatura mitológica egípcia é conhecida como a "Devoradora de Almas" e
                        possui a cabeça de crocodilo?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> A - Rá</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Anúbis</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="certo">
                        <label> C - Ammut</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao5" class="tamanhoInputOriginal" value="errado">
                        <label> D - Ísis</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta5">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-6">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 6:</h1>
                    <p class="pergunta" id="ajustePergunta6">Qual é o deus com cabeça de chacal associado à morte e ao
                        embalsamamento na mitologia egípcia?</p>
                    <p class="dificuldade">Nível Médio</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="certo">
                        <label> A - Anúbis</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> B - Seth</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> C - Hórus</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao6" class="tamanhoInputOriginal" id="" value="errado">
                        <label> D - Ptah</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta6">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-7">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 7:</h1>
                    <p class="pergunta" id="ajustePergunta7">Na mitologia egípcia, qual era o papel e importância da
                        deusa Ma'at no conceito de justiça e equilíbrio cósmico, e como ela era frequentemente
                        representada?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Ma'at era a deusa da guerra e da destruição, frequentemente representada com
                            uma lança e um escudo.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Ma'at personificava a ordem, a verdade e a justiça, e era representada com
                            uma pena de avestruz em sua cabeça.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Ma'at era a deusa do amor e da fertilidade, muitas vezes retratada com uma
                            cornucópia em suas mãos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao7" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Ma'at era uma deusa lunar, simbolizando a passagem do tempo, e era
                            representada com uma lua crescente sobre sua testa.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta7">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-8">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 8:</h1>
                    <p class="pergunta" id="ajustePergunta8">Qual é a história de Osíris na mitologia egípcia e qual é o
                        seu papel na religião egípcia?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Osíris era um deus guerreiro que liderou o exército egípcio em batalhas.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="certo">
                        <label>B - Osíris era um deus associado à morte e à ressurreição, simbolizando a crença na vida
                            após a morte e o renascimento.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Osíris era um faraó cruel que governou o Egito com mão de ferro.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao8" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Osíris era um deus menor sem grande influência na religião egípcia.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta8">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-9">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 9:</h1>
                    <p class="pergunta">Qual é o significado dos hieróglifos na cultura egípcia antiga?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="certo">
                        <label>A - Os hieróglifos eram um sistema de escrita que incluía símbolos e imagens usados para
                            registrar eventos, história e religião.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Os hieróglifos eram utilizados apenas para a contabilidade e registros
                            comerciais.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>C - Os hieróglifos eram usados exclusivamente pelos faraós e sacerdotes para manter
                            segredos.</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao9" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Os hieróglifos não tinham nenhum significado especial na cultura egípcia.</label>
                    </div>

                    <div class="buttonResponder">
                        <input type="button" value="Responder" id="btnPergunta9">
                    </div>
                </div>
            </section>
            <section id="secao-pergunta-10">
                <div class="informacoes-questao">
                    <h1 class="questao">Pergunta 10:</h1>
                    <p class="pergunta" id="ajustePergunta10">Qual era o propósito principal do Livro dos Mortos na
                        mitologia egípcia, além de guiar os mortos na vida após a morte?</p>
                    <p class="dificuldade">Nível Difícil</p>
                </div>
                <div class="alternativas">
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>A - Registrar os feitos heroicos dos faraós</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>B - Preservar receitas culinárias antigas</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="certo">
                        <label>C - Auxiliar o falecido em várias etapas do processo de transição para o além e
                            assegurar um julgamento favorável</label>
                    </div>
                    <div class="radio-container">
                        <input type="radio" name="questao10" class="tamanhoInputOriginal" id="" value="errado">
                        <label>D - Registrar os registros astronômicos da antiga civilização egípcia</label>
                    </div>

                    <?php $_SESSION['idMitologia'] = "2"; ?>

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