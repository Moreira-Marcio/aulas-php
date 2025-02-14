<?php
// Obtém o nome do arquivo da página atual
$page = basename($_SERVER["PHP_SELF"],".php");

// Define títulos personalizados para cada página
$titles = [
    "index" => "Página Inicial - Site PHP",
    "cursos" => "Treinamentos - Site PHP",
    "duvidas" => "Dúvidas - Site PHP",
    "contato" => "Contato - Site PHP"
   
];

// Define o título padrão caso a página não esteja no array
$title = isset($titles[$page]) ? $titles[$page] : "";
echo $title;


?>