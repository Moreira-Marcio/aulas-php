<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - mapulando dados na memoria</title>
</head>
<body>
    <h1>Variaveis e constantes</h1>
    <hr>

    <?php
    //variaveis//

    $curso = "tec. em informatica para internet";//string//
    $ano = 2025; //inteiro
    $preco = 2500.25; //real (float, decimal)

    echo "<h2>Saida de dados usando echo na sintaxe completa</h2>";
    echo "<p> Estamos no curso <b>".$curso."</b> no ano letivo de ".$ano." </p>";
    echo '<p> Estamos no curso '.$curso.' no ano letivo de '.$ano.' </p>';

    //interpolação é obrigadpo o uso de aspas duplas
    echo "<p> Estamos no curso .$curso. no ano letivo de .$ano. </p>";

    //com aspas simples, interpoáção nao funciona
    echo '<p> Estamos no curso .$curso. no ano letivo de .$ano.</p>';

    ?>
    
    <hr>
    <h2>Saida de dados usando echo na sintaxe ABREVIADA/CURTA</h2>
    <p>Estamos no curso <?=$curso?>  no ano letivo de <?=$ano?> . </p>


    <hr>

    <?php
      //constante

      //sintaxe 1 (mais antiga): usando a função  define()
      define("meu_nome", "Marcio Moreira");

      //sintaxe 2 (mais moderna): usando a palavra-chave const

    const unidade = "penha";

    ?>

    <h2>Saida de dados constantes</h2>
    <p>Me chamo <?=meu_nome ?> e estou no Senac <?=unidade?></p>
    <hr>

    <h2>Sintaxe heredoc e nowdoc</h2>
    <p><i>Uteis para strings de multiplas linhas</i></p>


    <?php
    //heredoc exenoc 
    $nome = "fulano da silva";

    $textoHeredoc = <<<texto
    <ul>
        <li>nome: $nome</li>
        <li  style= "color:red">texto com CSS</li>
    </ul>           
    texto;

    //texto nowDoc somentre para string /texto nao interpreta variaveis

    $comida = "lasanha";

    $textoNowdoc = <<<'texto'
    ola! Bem-vindo ao PHP.
    estamos testando a sintaxe <b>nowDoc</b>
    eu adoro $comida.

    texto

    ?>
    <div>
        <h3>Saida com heredoc</h3>
        <?=$textoHeredoc?>
    </div>

    <div>
        <h3>Saida com nowDoc</h3>
        <?= $textoNowdoc?>
    </div>

</body>
</html>