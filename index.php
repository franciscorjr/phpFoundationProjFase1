<?php
$rota = parse_url ("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = str_replace("/","", $rota['path']);

require_once("myPHPFunctions.php");
require_once("header.php");
require_once("menu.php");
require_once($path.".php");
require_once("footer.php");
?>