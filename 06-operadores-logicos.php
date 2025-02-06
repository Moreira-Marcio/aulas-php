<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <h1>Relembrando Operadores Logicos</h1>
    <hr>
    <h2>&& (e/and)</h2>
 <?php 
 /* Avaliar um aluno mediante media e faltas*/ 
 $media= 9.5;
 $faltas = 10;
 
 if($media >= 7 && $faltas <= 10 ) {
    echo "<p>Aprovado</p>";
 }else {
    echo "<p>Reprovado</p>";
 }
 
 ?>   
    

    <!-- o simbolo | é chamado de pipe -->
    <h2>|| (ou/or)</h2>

    <h2>! (não/not)</h2>
    
</body>
</html>