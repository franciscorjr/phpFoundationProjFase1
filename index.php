<?php
require_once("myPHPFunctions.php");

$path = basename($_SERVER['REQUEST_URI']);

$arquivo_destino = verificaArquivo($path);
//$arquivo_destino = substr($arquivo_destino,0,10);
 if ($arquivo_destino == "home.php"){
     echo "achei";
     var_dump($arquivo_destino);
 }else{
     echo "que onda mano";
     var_dump($arquivo_destino);
 }

require_once("header.php");
require_once("menu.php");
require_once($arquivo_destino);
require_once("footer.php");
?>