<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
     <!-- <style>
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
    </style> -->
</head>

<body>
    <div class="text-center">
    <h1>Loop e Estrutura de Dados</h1>
    <p>Crie uma estrutura de dados (pode ser um array indexado, ou array associativo, ou array de objetos, ou matriz) com 6 nomes de linguagens e uma pequena descrição para cada.</p>
    <table class="table table-hover table-secondary">
        <thead class="table-dark">
        <tr>
            <th ><b>ID</b></th>
            <th><b>Linguagem</b></th>
            <th><b>Caracteristica</b></th>
        </tr>
       </thead>
       <tbody>
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
                <td class="table-primary"><?= $linguagem ?></td>
                <td><?= $caracteristica ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>

    </table>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>