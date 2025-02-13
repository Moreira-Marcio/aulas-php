<?php 
define("escola","senac");

$curso = "tec. de informatica para internet";//constante
$tecnologias = ["html","css", "js"];//array

//função

function verificaIdade (int $valorDaIdade) : string {
          return $valorDaIdade >= 18 ? "maior" : "menor";   
}


?>