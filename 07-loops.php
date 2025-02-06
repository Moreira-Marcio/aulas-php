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
 while ($i <= 3){
  ?>
      <p><?=$i?></p> 
 <?php
       $i++;      
 }
 
 ?>   
<hr>

    <h2>do/while (parecido com  repita)</h2>

    <p>Repete <b>pelo menos uma vez</b> as ações e, caso a condição continue verdadeira, segue fazendo outros ciclos de repetição até a ccondição se tornar falsa</p>
<?php
$j = 5;
do{
?>
<div>
    <h3>titulo</h3>
    <p>texto qualquer

    </p>
</div>
<?php
  $j++;
}while ($j <= 3);
?>

    <h2>for (para)</h2>

    <p>Executa as ações por uma <b>quantidade determinada</b> de vezes</p>

    
</body>
</html>