<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
    <h1>Exercicio de condicionais</h1>

    <?php
    
    $valorCompra = 2000;

    if ($valorCompra> 5000){
        $desconto = 0.15;
    }elseif ($valorCompra > 3000){
        $desconto= 0.10;
    }elseif ($valorCompra > 1000) {
        $desconto = 0.05;
    }else{
        $desconto = 00;
    };
    
    $valorDesconto = $valorCompra * $desconto;
    $valorFinal = $valorCompra - $valorDesconto;

    ?>

    <p>Valor da sua compra é de R$<?=number_format($valorCompra, 2, ',', '.')?> e teve um desconto de <?=$desconto *100?>% ficando no valor de R$<?=number_format($valorFinal, 2, ',', '.')?></p>
    
</body>
</html>