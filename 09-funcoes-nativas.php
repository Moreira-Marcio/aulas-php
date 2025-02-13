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

        <hr>

        <h3><code>array_cum()</code></h3>
        <p>Somar valores com array numeric</p>

    <?php 
    $valores = [10, 20, 50, 1000, 500];
    $total = array_sum($valores);
    ?>    

    <p>Soma dos valores do array: <b><?=$total?></b></p>

        <hr>
        <h3><code>array_unique()</code></h3>
        <p>Retorna um novo array com dados <b>unicos</b></p>

     <?php 
     $produtos = [
        "tv", "notebook", "tv", "geladeira", "monitor","mouse"
     ];
     $produtosUnicos = array_unique($produtos);
     ?>   

     <pre><?=var_dump($produtos)?></pre>
     <pre><?=var_dump($produtosUnicos)?></pre>

         <hr>

         <h2>Numericos</h2>
         <h3><code>min(), max(), round()</code></h3>

     <?php 
     $valorQualquer = 1259.75;
     ?>    

     <p>Menor valor: <?=min($valores)?></p>
     <p>Maior valor: <?=max($valores)?></p>
     <p>Arredondamento: <?=round($valorQualquer)?></p>


        <hr>
        <h2>Filtros</h2>

        <p>Recursos/Funções/Constantes de analize e limpeza de dados atravez das funções <code>filter_var()</code> e <code>filter_imput()</code></p>

        <hr>

        <h3>Validação</h3>

     <?php 
     $emailErrado = "tiago.com.br";
     $emailCorreto = "tiago@provedor.com.br";

     ?>
     
     <p><?=var_dump(filter_var($emailErrado,FILTER_VALIDATE_EMAIL))?></p>
     <p><?=var_dump(filter_var($emailCorreto,FILTER_VALIDATE_EMAIL))?></p>

        <hr>

        <h3>Sanitização</h3>

     <?php 
     $ataqueDeRaqui = "<script>
         document.body.innerHTML = '<h1 Style= backgound:yelow><marquee loop>Sou raqui 🤬🤬🤬!!</marquee></h1>'
         </script>";

         $ataqueSanitizado = filter_var($ataqueDeRaqui, FILTER_SANITIZE_SPECIAL_CHARS);
         echo $ataqueSanitizado;
     ?>   

          <hr>
          <h2>Segurança (Criptografia de dados)</h2>

          <h3>algoritmos e recursos </h3>

          <u>
            <li>md5</li>
            <li>sha-1</li>
            <li>sha-256</li>
            <li><b>password_hash() e password_verify()</b></li>
          </u>
      <?php 

      //md5
      $senhaTextoPuro = "123senac";

      //md5
      $senhaCodificadaComMD5 = md5($senhaTextoPuro);
      //sha-1
      $senhaCodificadaComSHA1 = sha1($senhaTextoPuro);

      //sha-256
      $senhaCodificadaComSHA256 = hash('sha256',$senhaTextoPuro);


      ?>
      
      <hr>
      <p>Senha (texto puro): <?=$senhaTextoPuro?></p>
      <p>senha (md5):
          <?=$senhaCodificadaComMD5?> - (<?=strlen($senhaCodificadaComMD5)?>)
      </p>

      <p>senha (sha-1):
        <?=$senhaCodificadaComSHA1?> - (<?=strlen($senhaCodificadaComSHA1)?>)
      </p>

      <p>senha (SHA-256):
        <?=$senhaCodificadaComSHA256?> - (<?=strlen($senhaCodificadaComSHA256)?>)
      </p>

      <p class="alert alert_success"><i>método/algoritimo ideal atual</i></p>

      <?php 
      $senhacodificada = password_hash ($senhaTextoPuro, PASSWORD_DEFAULT);
      ?>

      <p>semnha codificada com <code>password_hash</code>:
        <?=$senhacodificada?> (<?=strlen($senhacodificada)?>)   
    </p>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>    
</body>
</html>