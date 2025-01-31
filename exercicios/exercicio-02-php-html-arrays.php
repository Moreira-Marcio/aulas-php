<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 PHP e HTML: Arrays</title>

    <style>
        .container1{
            border:black,solid,6px;
            background-color: black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-shadow: solid;
            color:white ;
            margin: 2px;
            padding: 2px;
            border-radius: 5px;


        }
        .container2{
            border:gray,solid,6px;
            background-color:#FF00FF;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-shadow: solid;
            padding: 2px;
            color: whitesmoke;
            border-radius: 5px;

        }
        div {
           
            display: flex;
           

        }
    </style>
</head>
<body>
    <h1>Exercício 02 PHP e HTML: Arrays</h1>

    <?php
    $pessoa1= [
        "usuario"=>"Marcio", 
        "email"=>"marcio@senac.com.br", 
        "senha"=>"1234", 
        "idade"=> 41, 
        "sexo"=>"marculino",
        "cidade"=>"São Paulo"];
    $pessoa2= [
        "usuario"=>"Milena",
        "email"=> "milena@senac.com.br", 
        "senha"=>"1234",
        "idade"=> 39,
        "sexo"=>"feminino", 
        "cidade"=>"São Paulo"]
    ?>
    <div>
    <article class="container1">
        <h2>Bem vindo!!</h2>
        <p>Usuario: <?=$pessoa1["usuario"]?></p>
        <p>E-mail: <?=$pessoa1["email"]?></p>
        <p>Idade:<?=$pessoa1["idade"]?> anos</p>
        <p>Sexo:<?=$pessoa1["sexo"]?></p>
        
       

    </article>
    <article class="container2">
        <h2>Bem vinda!!</h2>
        <p>Usuario:<?=$pessoa2["usuario"]?></p>
        <p>E-mail: <?=$pessoa2["email"]?></p>
        <p>Idade:<?=$pessoa2["idade"]?> anos</p>
        <p>Sexo:<?=$pessoa2["sexo"]?></p>
       



    </article>
    </div>
    
</body>
</html>