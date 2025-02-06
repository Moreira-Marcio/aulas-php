<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <h1>Relembrando Operadores Logicos</h1>
    <hr>
    <h2>&& (e/and)</h2>
 <?php 
 /* Avaliar um aluno mediante media e faltas*/ 
 $media= 9.5;
 $faltas = 10;
 
 if($media >= 7 && $faltas <= 10 ) {
    ?>
   <p>Aprovado</p>
 <?php   
 }else {
    ?>
    <p>Reprovado</p>
    <?php
 }
 
 ?>   
    <hr>

    <!-- o simbolo | é chamado de pipe -->
    <h2>|| (ou/or)</h2>
    <p><i>Basta apenas que seja <b>verdadeiro/true</b></i></p>

 <?php 
 /* dar um desconto a um cliente que seja vip ou que tenha cupom*/ 
 $clienteVip = true; // valor/tipo booleano
 $temCupom = false;

 if ($clienteVip || $temCupom) {
  ?>  
    <p>Desconto aplicado!</p>
 <?php   
 }else {
    ?>
    <p>Sem desconto!</p>
 <?php   
 }
 
 ?>   

 <hr>

    <h2>! (não/not)</h2>

 <?php
 // se o usuario nao estiver logado, exibir o bpotao de login, caso contrario exibir uma saudação

 $usuarioLogado = false;

 if(!$usuarioLogado){
  ?>  
      <a href="login.php">Login</a>
  <?php
 }else {
    ?>
    <span>Bem vindo ao sistema!</span>
<?php
 }
 ?>   

 <hr>

     <h2>Usando tres operadores combinados para uma logica mais elaborados</h2>
<?php

 $idade = 16;
 $acompanhadoPais = true;
 $estarBebado = false;
 
 if($idade >= 18 || $acompanhadoPais && !$estarBebado){
  ?>  
    <p>Entrada permitida!</p>
 <?php   
 }else {
   ?> 
    <p>Entrada negada!</p>
 <?php   
 }
 ?>   
</body>
</html>