<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
    <style>
        .table {
            width: 60%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <p>Crie uma estrutura de dados (pode ser um array indexado, ou array associativo, ou array de objetos, ou matriz) com 6 nomes de linguagens e uma pequena descrição para cada.</p>
    <table class="table">
        <tr>
            <th><b>ID</b></th>
            <th><b>Linguagem</b></th>
            <th><b>Caracteristica</b></th>
        </tr>


        <?php
        $i = 1;

        $linguagens = [

            "HTML" => "Estruturação",
            "CSS" => "Estilos",
            "JS" => "Comportamentos",
            "PHP" => "Back-End",
            "SQL" => "Manipulação de dados",
            "Java" => "Softwares"
        ];

        foreach ($linguagens as $linguagem => $caracteristica) {
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $linguagem ?></td>
                <td><?= $caracteristica ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>