<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 01-php+html</title>

    <style>
        .destaque{
            background-color: burlywood;
            margin: auto;
            border:brown ;
        }
        .texto{
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .hidden-text {
            display: none;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <h1 >criando variaveis ou constantes</h1>
    <hr>
    <?php
    $data = "29/01/2025";
    $nome = "Marcio Moreira";
    $curso = "tec. em informatica para internet";
    $cargaHoraria = 120;
    $limiteFaltas = $cargaHoraria*0.15;
    $anuncio= "caso seja atingido pode resultar na perca da vaga.";
    
    ?>
    <div class="destaque">
    <p class="texto">Hoje dia <b><?=$data?></b>, o aluno <b><?=$nome?> </b>foi aceito para o curso de <?=$curso?>, com carga horaria de <b><?=$cargaHoraria?> horas</b>, lembrando que ha um limite de faltas de <b><?=$limiteFaltas?> horas <span class="hidden-text" id= <?=$limiteFaltas?>><?=$anuncio?></span> </b>  . </p>

    
    </div>
  
    <script>
         const exemplo = document.getElementById("<?=$limiteFaltas?>").addEventListener("click",function(){
            var message = document.getElementById("message");
            if (message.style.display === "none") {
                message.style.display = "inline";
            } else {
                message.style.display = "none";
            }
        });
    </script>
</body>
</html>