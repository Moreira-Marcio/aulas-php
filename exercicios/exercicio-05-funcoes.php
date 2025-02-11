<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

         <h1>Exercicio 05 Funções</h1>
    <div class="container">
      <?php 
      $notaMat=5;
      $notaPor=10;
      $notaIng=10;

      // soma das notas informadas
      $somaNotas = $notaIng + $notaMat + $notaPor;
    
      // Arrow Function (SEMPRE PRIMEIRO DECLARAR, PRA DEPOIS USAR)
      $verificarMedia= fn(float $totalNotas):float => $totalNotas / 3;

      
      
      // Chamando a função verificarMedia() e guardando o resultado dela
      $resultadoDaMedia = $verificarMedia($somaNotas);   
      
    

      /* Funções */
      

      // Função sintaxe comum
      function aprovacao(float $resultadoMedia):string {

        if($resultadoMedia >= 7){
            return "<span class='badge text-bg-success'>Aprovado</span>";
        }

        return "<span class='badge text-bg-danger'> Reprovado </span>";
        
        }

      ?>

      <p>sua media é <?=$resultadoDaMedia?> o aluno(a) esta: <?=aprovacao($resultadoDaMedia)?></p>


    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>