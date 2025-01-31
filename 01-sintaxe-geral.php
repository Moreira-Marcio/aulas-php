<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php sintaxe geral</title>
    <style>
        .exemplo {
            color: red;
            border: solid 4px;
            padding: 4px;
        
        }
    </style>
</head>
<body>
    <h1>trabalhando com php</h1>


    <hr>
    <?php
    // geração de strings/textos
        echo "hoje o corinthians joga!";
    // gferação de tags e atributos
        echo "<p> vai ganhar de goleada!</p>"; 
    // aspas duplas fora aspas simples dentro (correto)    
        echo "<p><abbr title='sport clube corinthians paulista'>sccp</abbr></p>"; 
    // aspas simples fora aspas duplas dentro (correto)    
        echo '<p><abbr title="sport clube corinthians paulista">sccp</abbr></p>'; 
    // aspas duplas dentro e fora ou aspas simples dentro e fora (errado)
       // echo "<p><abbr title="sport clube corinthians paulista">sccp</abbr></p>"; 

    //aspas usando escape \ (correto)
        echo "<p><abbr title=\"sport clube corinthians paulista\">sccp</abbr></p>"; 

        echo "<h2>Brincando <apan class=\"exemplo\">PHP</span?> </h2>";

        $saudacao = "ola!";
    ?>
    
    <script>
        const exemplo = document.querySelector(".exemplo");
        exemplo.addEventListener("click",function(){
            alert("<?php echo $saudacao; ?>");
        })
    </script>
</body>
</html>