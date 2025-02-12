<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

         <h1 class="grid text-center">Exercicio 05 Funções</h1>

         <hr>
    <div class="container grid text-center " >
      <?php 
      $alunos = [
       
      [
        "nome" => "jao",
        "nota1" =>7,
        "nota2" => 5,
        "nota3" => 8
      ],
       [
        "nome" => "mane",
        "nota1" =>7,
        "nota2" => 10,
        "nota3" => 9
      ],
      [
        "nome" => "banzo",
        "nota1" =>9,
        "nota2" => 8,
        "nota3" => 8
      ],
     [
       "nome" => "louco",
        "nota1" =>7,
        "nota2" => 5,
        "nota3" => 8
     ],
     [
      "nome" => "bozó",
       "nota1" =>7,
       "nota2" => 5,
       "nota3" => 10
     ]
    ];


 // Arrow Function (SEMPRE PRIMEIRO DECLARAR, PRA DEPOIS USAR)
      //$verificarMedia= fn(float $totalNotas):float => $totalNotas / 3;


      $verificarMedia= fn(float $nota1,float $nota2, float $nota3):float => ($nota1 + $nota2 + $nota3) / 3;


    

    foreach ($alunos as $aluno){
      $media = $verificarMedia($aluno["nota1"],$aluno["nota2"],$aluno["nota3"]);
      $resultado =  aprovacao($media);
      ?>
       <p class="p-3 mb-2 bg-primary-subtle border border-primary w-50 p-3 mx-auto p-2">O aluno: <?= $aluno["nome"]?> foi <?= $resultado ?> com media <?=number_format($media,2,",")?></p>
     <?php 
    } 


      // soma das notas informadas
      //$somaNotas = $notaIng + $notaMat + $notaPor;
    
     

      
      
      // Chamando a função verificarMedia() e guardando o resultado dela
      //$resultadoDaMedia = $verificarMedia($somaNotas);   
      
    

      /* Funções */
      

      // Função sintaxe comum
      function aprovacao(float $resultadoMedia):string {

        if($resultadoMedia >= 7){
            return "<span class='badge text-bg-success'>Aprovado</span>";
        }

        return "<span class='badge text-bg-danger'> Reprovado </span>";
        
        }

      ?>

      


    </div>
  


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>