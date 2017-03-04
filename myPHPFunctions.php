<?php

function verificaRota($path)
{

    if ($path == "home") {
        $arquivo_destino = "home.php";
    } else if ($path == "empresa") {
        $arquivo_destino = "empresa.php";
    } else if ($path == "produto") {
        $arquivo_destino = "produto.php";
    } else if ($path == "servico") {
        $arquivo_destino = "servico.php";
    } else if ($path == "contato") {
        $arquivo_destino = "contato.php";
    }
    return $arquivo_destino;
}

function verificaArquivo($arquivo)
{
    if (file_exists($arquivo . ".php")) {
        $arquivo_destino = verificaRota($arquivo);
        return $arquivo_destino;
    } else {
        header("HTTP/1.0 404 Not Found"); //Funciona em alguns servidores e em outros não, por isso usei os 2
        header("Status: 404 Not Found");  //Funciona em alguns servidores e em outros não, por isso usei os 2
        $arquivo_destino = "404.php";
        return $arquivo_destino;
    }
}

date_default_timezone_set('America/Manaus');

function pegaInfoData($var)
{
    return date($var);
}
