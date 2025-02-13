<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções Nativas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Usando funções nativas</h1>
        <hr>

        <h2>Strings</h2>

        <h3><code>trim()</code></h3>
        <p>Remove espaços antes e depois de strings</p>

     <?php
     $texto = "    Paulo Henrique está me devendo paçocas      ";
     $textoSemEspaco = trim($texto);    
     
     ?>
     
     <pre><?=var_dump($texto)?></pre>

     <pre><?=var_dump($textoSemEspaco)?></pre>

     <hr>

        <h3>str_replace</h3>
        <p>Permite subistituir partes de uma string</p>

     <?php 
     $fraseFeia = "Esse Paulo é um bobão e xarope";
     $fraseBunitinha = str_replace (
        ["bobão","xarope"],
        ["😡","🚨"],
        $fraseFeia
     );    
     
     ?>   

     <p><?=$fraseFeia?></p>
     <p><?=$fraseBunitinha?></p>

        <h3><code>explode()</code></h3>
        <p>Transformar uma string em um array</p>

     <?php  
     $textoLinguagem = "HTML, CSS, JS, PHP, SQL";
     $arrayLinguagens = explode(",", $textoLinguagem);
     ?>   

     <pre><?=var_dump($textoLinguagem)?></pre>
     <pre><?=var_dump($arrayLinguagens)?></pre>

       <hr>
       <h2>Array</h2>

       <h3><code>implode</code></h3>
       <p>transforma array em string</p>

     <?php 
     $arrayBandas= ["rush", "Slayer", "Dio"];
     $textoBandas = implode("-",$arrayBandas);
     ?>  

     <pre><?=var_dump($arrayBandas)?></pre>
     <pre><?=var_dump($textoBandas)?></pre>

         <hr>

         <h3><code>extract()</code></h3>
         <p>Estrai chaves associativas para variaveis</p>

     <?php 
     $aluno = [
        "id" => 1,
        "nome" => "chapolin",
        "idade" => 25
     ];

     extract($aluno);
     ?>    

     <ul>
        <li>ID: <?=$id?></li>
        <li>Nome: <?=$nome?></li>
        <li>Idade: <?=$idade?> anos</li>
     </ul>

    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>