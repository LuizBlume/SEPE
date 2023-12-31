<?php
  if(!isset($_SESSION)) {
    session_start();
  }
  
  include('../../../back/protecao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../paginas/css/index.css">
  <title>Index | SEPE</title>
</head>

<body>
  <div class="container">
    <div class="tabs">
      <input id="egipcia" type="radio" name="slider" checked></a>
      <input id="grega" type="radio" name="slider">
      <input id="hindu" type="radio" name="slider">
      <input id="irlandesa" type="radio" name="slider">
      <input id="japonesa" type="radio" name="slider">
      <input id="mesopotamica" type="radio" name="slider">
      <input id="nordica" type="radio" name="slider">
      <input id="romana" type="radio" name="slider">
      <input id="quiz" type="radio" name="slider">

      <div class="botoes">
        <label for="egipcia"></label>
        <label for="grega"></label>
        <label for="hindu"></label>
        <label for="irlandesa"></label>
        <label for="japonesa"></label>
        <label for="mesopotamica"></label>
        <label for="nordica"></label>
        <label for="romana"></label>
        <label for="quiz"></label>
      </div>
      <div class="conteudo">
        <div class="caixa egipcia">
          <div class="conteudocx">
            <img src="imagens/icons/a3c8d320af0892d9de11c70f30f2fb8a-olho-budista-do-icone-de-horus.png" alt="" width="200px">
            <h2>Mitologia egípcia</h2>
            <p>A mitologia egípcia é uma antiga tradição de crenças e histórias do Egito Antigo, envolvendo deuses,
              rituais e uma forte influência na cultura egípcia, com ênfase na vida após a morte.</p>
            <button class="alternar-aba" data-target="egipcia">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Neterus Primordiais</li>
              <li>Neterus Geradores</li>
              <li>Neterus da Primeira Geração</li>
              <li>Neterus da Segunda Geração</li>
            </ul>
            <a href="../paginas/egipcia.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa grega">
          <div class="conteudocx">
            <img src="imagens/icons/helenismo2.png" alt="" width="200px">
            <h2>Mitologia grega</h2>
            <p>A mitologia grega é um conjunto de lendas e histórias da Grécia Antiga sobre deuses, heróis e criaturas
              míticas que desempenharam papéis significativos na cultura e na compreensão do mundo naquela época.</p>
            <button class="alternar-aba" data-target="grega">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Seres Mitológicos</li>
              <li>Deuses Gregos</li>
              <li>Principais Deuses da Mitologia Grega</li>
              <li>Mitos</li>
            </ul>
            <a href="../paginas/grega.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa hindu">
          <div class="conteudocx">
            <img src="imagens/icons/hindu.png" alt="" width="200px">
            <h2>Mitologia hindu</h2>
            <p>A mitologia hindu é um conjunto de histórias e crenças da Índia, envolvendo diversos deuses e deusas,
              lendas e ensinamentos espirituais que têm sido fundamentais na cultura e na religião hindu ao longo da
              história.</p>
            <button class="alternar-aba" data-target="hindu">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Vaca Sagrada</li>
              <li>Rama</li>
              <li>Hanuman</li>
              <li>Devoção A Hanuman</li>
            </ul>
            <a href="../paginas/hindu.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa irlandesa">
          <div class="conteudocx">
            <img src="imagens/icons/celta.png" alt="" width="200px">
            <h2>Mitologia irlandesa</h2>
            <p>A mitologia irlandesa é um rico conjunto de mitos e lendas que fazem parte do folclore da Irlanda. Ela
              apresenta deuses, heróis e criaturas mágicas, e desempenhou um papel importante na cultura irlandesa ao
              longo da história.</p>
            <button class="alternar-aba" data-target="irlandesa">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Ciclos da mitologia irlandesa</li>
              <li>Panteão Irlandês</li>
              <li>Elementos Folclóricos</li>
              <li>The Leprechauns</li>

            </ul>
            <a href="../paginas/irlandesa.html"><button class="irlandesa">Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa japonesa">
          <div class="conteudocx">
            <img src="imagens/icons/flor.png" alt="" width="200px">
            <h2>Mitologia japonesa</h2>
            <p>A mitologia japonesa é um conjunto de crenças e lendas do Japão, envolvendo deuses, espíritos e criaturas
              míticas que desempenham papéis significativos na cultura e espiritualidade japonesa.</p>
            <button class="alternar-aba" data-target="japonesa">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Origem</li>
              <li>Religião Base</li>
              <li>Deuses</li>
              <li>Lendas</li>
            </ul>
            <a href="../paginas/japonesa.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa mesopotamica">
          <div class="conteudocx">
            <img src="imagens/icons/meso.png" alt="" width="200px">
            <h2>Mitologia mesopotâmica</h2>
            <p>A mitologia mesopotâmica é um conjunto de crenças e lendas das antigas civilizações que habitaram a
              região da Mesopotâmia, entre os rios Tigre e Eufrates. Ela envolve uma variedade de deuses e figuras
              míticas que desempenharam papéis significativos na cultura dessas civilizações.</p>
            <button class="alternar-aba" data-target="mesopotamica">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>O mito da criação</li>
              <li>O dilúvio</li>
              <li>Gilgamesh</li>
              <li>A Epopeia</li>
            </ul>
            <a href="../paginas/mesopotamica.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa nordica">
          <div class="conteudocx">
            <img src="imagens/icons/1200px-Aegishjalmr.svg.png" alt="" width="200px">
            <h2>Mitologia nordica</h2>
            <p>A mitologia nórdica, ou escandinava, é um conjunto de lendas e crenças das culturas da Escandinávia,
              incluindo deuses, heróis e criaturas míticas que desempenham papéis importantes nas histórias e na cultura
              desses povos.</p>
            <button class="alternar-aba" data-target="nordica">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Reinos</li>
              <li>Deuses</li>
              <li>As Criaturas Nórdicas</li>
              <li>Os Mitos Mais Conhecidos</li>
            </ul>
            <a href="../paginas/nordica.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa romana">
          <div class="conteudocx">
            <img src="imagens/icons/ddf1d5c26412724c504305be6351106a-icone-de-golpe-de-capacete-romano.png" alt=""
              width="200px">
            <h2>Mitologia romana</h2>
            <p>A mitologia romana é um conjunto de crenças e lendas da Roma Antiga, envolvendo deuses, heróis e
              histórias que desempenharam papéis significativos na cultura e religião romanas.</p>
            <button class="alternar-aba" data-target="romana">Ver Mais</button>
          </div>
          <div class="aba">
            <h1>Tópicos da página</h1>
            <hr>
            <ul>
              <li>Deuses</li>
              <li>Mitos</li>
              <li>História de Enéias</li>
              <li>influencia dos gregos</li>
            </ul>
            <a href="../paginas/romana.html"><button>Ir Para A Página</button></a>
          </div>
        </div>
        <div class="caixa quiz">
          <div class="conteudocx">
            <img src="imagens/icons/25400.png" alt="" width="200px">
            <h2>Quiz geral</h2>
            <p>Agora que você já leu tudo sobre as mitologias, que tal jogar um quiz para testar os seus conhecimentos?
            </p>
            <a href="../quiz/geral.html"><button>Jogue Agora!</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script>
    const buttons = document.querySelectorAll('.alternar-aba');
    buttons.forEach(button => {
      button.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const aba = document.querySelector(`.${targetId} .aba`);

        if (aba.style.display === 'none' || aba.style.display === '') {
          aba.style.display = 'block';
          this.textContent = 'Voltar';
          document.querySelector(`.${targetId} .conteudocx`).style.width = '50vw';
          document.querySelector(`.${targetId} .botoes`).style.display = 'none';
          let botoes = document.getElementsByClassName("botoes");
          for (let c = 0; c < botoes.length; c++) {
            botoes[c].style.display = 'flex';
          }
        } else {
          aba.style.display = 'none';
          this.textContent = 'Ver Mais';
          document.querySelector(`.${targetId} .conteudocx`).style.width = '100vw';
          document.querySelector(`.${targetId} .botoes`).style.display = 'flex';
          let botoes = document.getElementsByClassName("botoes");
          for (let c = 0; c < botoes.length; c++) {
            botoes[c].style.display = 'none';
          }
          aba.classList.add('voltar');
        }
      });
    });
  </script>
</body>

</html>