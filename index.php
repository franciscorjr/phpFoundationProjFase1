<?php
session_start();
require_once("myPHPFunctions.php");

$path = basename($_SERVER['REQUEST_URI']);

$arquivo_destino = verificaArquivo($path);
require_once("header.php");
require_once("menu.php");
if(substr($arquivo_destino,0,1) == '<'){
    echo $arquivo_destino;
}


echo $conteudo = carregaConteudo($arquivo_destino);


if($arquivo_destino == "contato.php"){
    require_once("contato_complemento.php");
}else if($arquivo_destino == "validaLogin.php"){
    require_once("validaLogin.php");

}else if($arquivo_destino == "logout.php"){
    require_once("logout.php");

}else if($arquivo_destino == "salvaAlteracao.php"){
    require_once("salvaAlteracao.php");

}
require_once("footer.php");
?>