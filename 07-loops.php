<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP - Loops</title>
</head>

<body>
   <h1>Trabalhando com comandos/laços de repetição</h1>
   <hr>

   <h2>while (enquanto)</h2>

   <p>Executa açoes <b>enquanto a condição for verdadeira</b>.SE a condição inicialmente não for verdadeira, loop nao funciona nenhuma vez</p>

   <?php
   $i = 1;
   while ($i <= 3) {
   ?>
      <p><?= $i ?></p>
   <?php
      $i++;
   }

   ?>
   <hr>

   <h2>do/while (parecido com repita)</h2>

   <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a ccondição se tornar falsa</p>
   <?php
   $j = 5;
   do {
   ?>
      <div>
         <h3>titulo</h3>
         <p>texto qualquer

         </p>
      </div>
   <?php
      $j++;
   } while ($j <= 3);
   ?>

   <hr>

   <h2>for (para)</h2>

   <p>Executa as ações por uma <b>quantidade determinada</b> de vezes</p>
   <ol>
      <?php
      for ($i = 1; $i <= 10; $i++) {
      ?>
         <p><code>i</code> vale: <b><?= $i ?></b></p>
      <?php
      }
      ?>
      <hr>
      <h2>Mini-exercicio</h2>
      <p>crie um array contendo os 12 meses do ano e usando um loop que vimos, mostre os nomes dos meses em uma lista ordenada</p>

      <?php
      $meses = array(
         "Janeiro",
         "Fevereiro",
         "Março",
         "Abril",
         "Maio",
         "Junho",
         "Julho",
         "Agosto",
         "Setembro",
         "Outubro",
         "Novembro",
         "Dezembro"
      );

      for ($i = 0; $i < 12; $i++) {

      ?>
         <li><?= $meses[$i]["Denis"] ?></li>
      <?php }
      ?>
   </ol>

   <hr>

   <h2>FOREACH (para cada)</h2>
   <p>é uma versão simplificado do loop FOR e bem mais facil de usar os arrays e objetos</p>

   <h3>acessando array indexado/numerico</h3>

   <?php
   $alunos = ["Denis", "Paulo", "Heloisa"];
   // (nome do array as nomeDeVariavelDeAcesso)
   foreach ($alunos as $aluno) {
   ?>
      <p>Nome: <?= $aluno ?> </p>
   <?php
   }
   ?>

   <h3>Acessando array associativo</h3>

   <?php
   $clubes = [
      "Corinthians" => "Timão",
      "Palmeiras" => "Sem mundial",
      "São Paulo" => "Tricoflor",
      "Santos" => "lambari"
   ];

   foreach ($clubes as $clube => $apelido) {
   ?>
      <p>O clube <?= $clube ?> é conhecido como <?= $apelido ?></p>
   <?php
   }
   ?>

   <h3>Acessando objeto</h3>

   <?php
   $livro = new stdClass();
   $livro->titulo = "o senhor dos aneis: a sociedade do anel";
   $livro->autor = "J.R.R Tolken";
   $livro->ano = 1954;

   foreach ($livro as $propriedade => $valor) {
   ?>
      <p><?= $propriedade ?>: <b><?= $valor ?></b></p>
   <?php }
   ?>




</body>

</html>