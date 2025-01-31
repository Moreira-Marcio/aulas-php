<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com Arrays</title>
</head>
<body>
    <h1>Trabalhando com Arrays</h1>
    <br>
    <h2>Arrays numericos/indxados</h2>
    <?php
    //sintaxe com colchetes
    $bandas= ["Charlie Browns Jr","Rush","Slayer"];

    //sintaxe função do array
    $cursos= array ("HTML5","Node.js","PHP","SQL");

    //sintaxe de atribuição manual usando os indices
    $comidas[0]="bolinho de bacalhau";
    $comidas [1]= "pastel";
    $comidas [2]= "coxinha";

    //constante de array
    define ("UNIDADES", ["Penha","Tatuapé"]);
    const FRUTAS = ["morango", "Abracaxi"];
    ?>

    <h3>Acesso de dados</h3>
    <ul>
        <li>Banda que mais curto: <?=$bandas[1]?></li>
        <li>Em brava vou lançar o curso de <?=$cursos[2]?></li>
        <li>quero comer <?=$comidas[0]?></li>
        <li>estamos no Senac <?=UNIDADES[0]?></li>
        <li>Vou fazer uma vitamina de <?=FRUTAS[1]?></li>
    </ul>
    <br>
    <h2>Arrays associativos</h2>
    
    <?php
    $curso = [
        "titulo" => "gastronomia",
        "carga-horaria" => 200,
        "descricao" => "aprender a esquentar água e fazer ovo cozido...",
    ]; 
    ?>

    <h3>Acessando os dados</h3>
    <p>Nome do curso: <?=$curso["titulo"]?></p>
    <p>Carga horaria: <?=$curso["carga-horaria"]?></p>
    <p>Descrição: <?=$curso["descricao"]?></p>

    <?php  
    //array associativo usando constantes
    define(
        "empresa",
        [
            "nome" => "biribinha informatica",
            "ano-fundacao" => 2021
        ]
    );
    echo empresa["nome"];
    echo "<br><br>";

    const OUTRA_EMPRESA =["nome" => "ABC TI", "ano-fundacao" =>2022];
    echo OUTRA_EMPRESA["nome"];
    ?>

    <br>
    <h2>Matrizes (array dentro de array)</h2>

    <?php
    $planoDeEstudos = [
        ["JS avançado", "Node.Js", "Next.Js"],
        ["PHP", "orientação a objeto"],
        ["teoria das cores", "photoshop", "UX/UI", "motion design"]
    ];
    ?>

    <h3>Acessando os dados</h3>
    <p>Vou estudar nos proximos meses:
        <?=$planoDeEstudos [0][2]?>, <?=$planoDeEstudos [1][0]?> e  <?=$planoDeEstudos [2][3]?>
    </p>

    <hr>

    <h2>Funçoes de analise/depuração/debug de estruturas de dados</h2>

    <h3><code>print_r()</code></h3>
    <pre><?=print_r($bandas)?><pre>


    <h3><code>var_dump()</code></h3>
    <pre><?=var_dump($bandas)?><pre>
    <pre><?=var_dump($curso)?><pre>

</body>
</html>