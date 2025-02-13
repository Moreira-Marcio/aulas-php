<?php 
define("escola","senac");

$curso = "tec. informatica internet";//constante
$tecnologias = ["html","css", "js"];//array

//função

function verificaIdade (int $valorDaIdade) : string {
          return $valorDaIdade >= 18 ? "maior" : "menor";   
}


?>