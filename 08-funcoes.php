<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>

        <h2>Funçãoi como procedimento (ou sub-rotina)</h2>
        <p><i>procedimentos <b>nao retornam</b></i></p>
        <hr>
        <?php
        function exibirDadosDoAutor()
        {
            echo "<h4>Fulano de tal</4>";
            echo "<p><time>" . date("d/m/y") . "</p>";
        }

        ?>
        <h3>Chamada do procedimento</h3>
        <?= exibirDadosDoAutor() ?>

        <h3>Outras chamadas </h3>
        <div><?= exibirDadosDoAutor() ?></div>

        <ul>
            <li><?= exibirDadosDoAutor() ?></li>
            <li><?= exibirDadosDoAutor() ?></li>
        </ul>
        <hr>

        <h3>Chamada do procedimento</h3>
        <?php
        $valor = 1500;
        if ($valor > 1000) {
            exibirDadosDoAutor();
        }
        ?>

        <hr>

        <h2>
            Função de parametro (ou argumentos)
        </h2>

        <?php
        function somar($valor1, $valor2)
        {
            //variavel de escopo local: este tipo de variavel existe somente dentro da função em que foi declarada
            // $total = $valor1 + $valor2;

            //retornamos o resultado ou seja "mandamos para fora" da função o resultado do que ela fez

            // return $total;

            //podemos também aplicar o valor direto na expressão
            return $valor1 + $valor2;
        }
        ?>

        <h3>Chamadas/retornos da função somar</h3>
        <p>resultado 1: <?= somar(10, 5) ?></p>
        <p>resultado 2: <?= somar(23, 107) ?></p>


        <?php
        //chamando a função e guardando o resultado de uma variavel
        $resultado3 = somar(1,788.85);
        ?>

        <p>resultado 3: <?= $resultado3 ?></p>

        <?php
        if ($resultado3 > 2000) { ?>
            <p class="alert alert-success">O resultado 3 é maior que 2000</p>
        <?php } else { ?>
            <p class="alert alert-danger">O resultado de 3 não é maior que 2000</p>
        <?php }  ?>

        <!-- usamos uma função como parte da condição: 
         Primeiro a função é chamada (e ai calcul e  retorna)
         Depois o resultado que ela retornou é comparado  com a condição -->
        <?php
        if (somar(10,50)<500){?>
             <p>João Pedro Reprovado..</p>


       <?php }
        ?>

        <hr>

        <h3>Função com parametros opcionais</h3>


        <?php 
        //parametros opcionais possuem algum tipo de atribuição com uma valor alternativo para o caso de nao serem passados na chamada da funçao. obs.: sempre devem estar por ultimo na relação de parametros da função
        
        function exibirSaudacao($mensagem , $pessoa = ""){
            return "ola, $mensagem $pessoa";
        }
        ?>

            <p>mensagem 1: <?=exibirSaudacao("bom dia ", "João Pedro")?></p>
            <p>mensagem 2: <?=exibirSaudacao("boa tarde")?></p>










    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>