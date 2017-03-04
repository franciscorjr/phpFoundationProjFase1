<?php
require_once("myPHPFunctions.php");

$path = basename($_SERVER['REQUEST_URI']);

$arquivo_destino = verificaArquivo($path);

require_once("header.php");
require_once("menu.php");
require_once($arquivo_destino);
require_once("footer.php");
?>