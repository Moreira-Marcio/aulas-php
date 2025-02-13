<?php include "recursos.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com include e require</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Modularização e inclusão de recursos</h1>
        <hr>

        <h2><?=escola?></h2>
        <p>estamos fazendo o curso de <?=$curso?></p>

        <ul>
            <?php foreach($tecnologias as $tecnologia){?>
            <li><?=$tecnologia?></li>
            <?php }?>
        </ul>

        <hr>
        <p>o aluno fulano de tal tem 20 anos e é <?=verificaIdade(20)?> de idade.</p>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>