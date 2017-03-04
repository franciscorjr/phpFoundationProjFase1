<?php
$rota = parse_url ("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","", $rota['path']);

if (file_exists($path.".php")) {
    
} else {
    header("HTTP/1.0 404 Not Found"); //Funciona em alguns servidores e em outros não, por isso usei os 2
    header("Status: 404 Not Found");  //Funciona em alguns servidores e em outros não, por isso usei os 2
    $path = "404";
}

require_once("myPHPFunctions.php");
require_once("header.php");
require_once("menu.php");
require_once($path.".php");
require_once("footer.php");
?>