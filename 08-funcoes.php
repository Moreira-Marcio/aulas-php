<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>

        <h2>Funçãoi como procedimento (ou sub-rotina)</h2>
        <p><i>procedimentos <b>nao retornam</b></i></p>
        <hr>
        <?php 
        function exibirDadosDoAutor (){
            echo "<h4>Fulano de tal</4>";
            echo "<p><time>".date("d/m/y")."</p>";
        }       
        
        ?>
            <h3>Chamada do procedimento</h3>
            <?=exibirDadosDoAutor ()?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>