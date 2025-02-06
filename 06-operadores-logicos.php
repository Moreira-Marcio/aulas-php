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
    echo "<p>Aprovado</p>";
 }else {
    echo "<p>Reprovado</p>";
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
    echo "<p>Desconto aplicado!</p>";
 }else {
    echo "<p>Sem desconto!</p>";
 }
 
 ?>   

 <hr>

    <h2>! (não/not)</h2>

 <?php
 // se o usuario nao estiver logado, exibir o bpotao de login, caso contrario exibir uma saudação

 $usuarioLogado = false;

 if(!$usuarioLogado){
      echo "<a hef=\"login.php\">Login</a>";
 }else {
    echo "?<span>Bem vindo ao sistema!</span>";

 }
 ?>   

 <hr>

     <h2>Usando tres operadores combinados para uma logica mais elaborados</h2>
<?php

 $idade = 16;
 $acompanhadoPais = true;
 $estarBebado = false;
 
 if($idade >= 18 || $acompanhadoPais && !$estarBebado){
    echo "<p>Entrada permitida!</p>";
 }else {
    echo "<p>Entrada negada!</p>";
 }
 ?>   
</body>
</html>