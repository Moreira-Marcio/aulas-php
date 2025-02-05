<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
<style>
    .comprar{
        color:red
    }
    .urgente {
        color: red;
        background-color: yellow;
    }
    .normal{
        color: green;
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
    echo "<p>$numero é maior que 1</p>";
}



// Sintaxe omitindo as chaves
if($numero > 1) echo "<p>$numero é maior que 1</p>";
?>


    <h2>Composta</h2>
 <?php 
 $produto = "ultraboock Azus";
 $qtEstoque = 10;//o que temos
 $qtCritica = 5;//minimo necessario

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtEstoque</h4>";

if ($qtEstoque < $qtCritica) {
    echo  "<p class=\"comprar\">É necessario comprar!</p>";
    //condicional aninhada
    if($qtEstoque ===0){
        echo "<p class=\"urgente\"><strong> 🚨Urgente🚨</strong></p>";
    }

} else {
    echo "<p class=\"normal\">estoque normal</p>";
}

 ?>   
 
    <h2>Encadeada</h2>
    <hr>

    


</body>
</html>