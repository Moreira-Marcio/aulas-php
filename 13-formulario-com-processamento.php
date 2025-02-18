<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP = formulario com processamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Formulario e processamento combinados</h1>
        <hr>
      <?php
       /*Detectando quando o formularioé adicionado */
       if(isset($_POST["enviar"])){
           $nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
           $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
           ?>
           <section>
            <h2>Dados</h2>
            <p>Nome: <?=$nome?></p>
            <p>Email: <?=$email?></p>
           </section>
       <?php } else{
       ?>  
        <form action="" method="post">
            <div class="mb-3">
               <label for="nome">Nome:</label>
               <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="mb-3">
               <label for="email">Email:</label>
               <input type="text" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
        </form>
    <?php } ?>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>