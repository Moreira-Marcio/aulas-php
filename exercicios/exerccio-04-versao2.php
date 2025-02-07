<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        body {
            text-align: center;

        }
      
        .table {
            width: 60%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    
<h1>Loop e Estrutura de Dados</h1>
<table class="table">
        <tr>
            <th><b>ID</b></th>
            <th><b>Linguagem</b></th>
            <th><b>Caracteristica</b></th>
        </tr>

    <?php
    $linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
];
        foreach ($linguagens as $linguagem) {
        ?>
            <tr>
                <td><?= $linguagem["id"] ?></td>
                <td><?= $linguagem["nome"] ?></td>
                <td><?= $linguagem["descricao"] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>