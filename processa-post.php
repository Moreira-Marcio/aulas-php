<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Processamento com POST</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Processamento usando POST</h1>
        <hr>
        <?php
        if (empty($_POST["nome"]) || empty($_POST["email"])) { ?>
            <p class="alert alert-danger">Por favor preencha o campo nome e email</p>
        <?php
        } else {
            // Capturando os dados transmitidos e sanitizalos
            $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input (INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $idade = filter_input(INPUT_POST, "idade" , FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            //capturando os options
            //solução 1: aplicar um ternario checando se existe algum interesse
            //$interesses = isset($_POST["interesses"]) ? $_POST["interesses"]: [];
            //solução 2: usando o operador de coalescencia nula  ??
            $interesses = filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

            $informativos = filter_var_array($_POST["informativos"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);

        ?>
            <!-- Exibindo -->
            <h2>Dados:</h2>
            <ul>

                <li>Nome: <?= $nome ?></li>
                <li>E-mail: <?= $email ?></li>

                <li>Idade: <?= $idade ?> anos</li>
                <?php if (!empty ($informativos)){?>
                    <li>receber informativos: <?= $informativos ?></li>
                <?php } ?>
                <!--usamos o empty com versão logica (operador! de negação ) portanto, se não esta vazio, mostre os interesses -->
                <?php if (!empty($interesses)) { ?>
                    <li>Interesses usando <code>implode()</code>:
                        <!--transformando o array em string-->
                        <?= implode(",", $interesses) ?>
                    </li>
                    <li>interesses - usando <code>foreach</code>:
                        <ul>
                            <?php foreach ($interesses as $interesse) { ?>
                                <li><?= $interesse ?></li>
                            <?php } ?>

                        </ul>

                    </li>
                <?php } ?>
                <li>Mensagem: <?= $mensagem ?></li>
            </ul>
        <?php    } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>