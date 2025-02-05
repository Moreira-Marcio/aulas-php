<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais versão 2</title>
<style>
    .comprar{
        color:red
    }
    .urgente {
        color: red;
        background-color: yellow;
    }
    .normal{
        color: darkgreen;
    }
</style>

</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>    
<?php
$numero = 5;

if($numero > 1){
 ?>   <p><?=$numero?> é maior que 1</p>;
<?php
}
?>
    <hr>

    <h2>Composta usando if e else</h2>
 <?php 
 $produto = "ultraboock Azus";
 $qtEstoque = 10;//o que temos
 $qtCritica = 5;//minimo necessario
?>
<h3><?=$produto?></h3>"
<h4>Quantidade em estoque: <?=$qtEstoque?></h4>

<?php
if ($qtEstoque < $qtCritica) {
    ?>
    <p class="comprar">É necessario comprar!</p>
    
    <?php
    //condicional aninhada
    if($qtEstoque ===0){ 
    ?>
        <p class="urgente"><strong> 🚨Urgente🚨</strong></p>
    <?php    
    }


} else { ?>
    <p class=normal>estoque normal</p>
<?php
    
} ?>

 
 
    <hr>
 
    <h2>Encadeada usando <code> if/elseif/else</h2>
<!--verificar a uidade de uma pessoa e determinar se ela é criança, adolescente, adulta e idosa -->

<?php 
$idade = 70;
if ($idade <= 12) {
    echo "<P>criança👹</p>";    
}
elseif ($idade <= 17){
    echo "<p>adolescente😠</p>";
}
elseif ($idade <= 59){
    echo "<p>adulto🥸</p>";
}
else{
    echo "<p>idoso👴</p>";
}
?>


    <hr>

    


</body>
</html>