<?php

function verificaRota($path)
{
    $checaRota = function ($rota) use ($path) {
        if ($rota == $path) {
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
            echo $arquivo_destino;
        }
    };

    $rotas = ["home", "empresa", "produto", "servico", "contato"];

    array_walk($rotas, $checaRota);
}

function verificaArquivo($arquivo)
{
    if (file_exists($arquivo . ".php")) {
        $rotas = ["home", "empresa", "produto", "servico", "contato"];

        $checaRota = function ($rota) use ($arquivo) {
            if ($rota == $arquivo) {
                if ($arquivo == "home") {
                    $arquivo_destino = "home.php";
                } else if ($arquivo == "empresa") {
                    $arquivo_destino = "empresa.php";
                } else if ($arquivo == "produto") {
                    $arquivo_destino = "produto.php";
                } else if ($arquivo == "servico") {
                    $arquivo_destino = "servico.php";
                } else if ($arquivo == "contato") {
                    $arquivo_destino = "contato.php";
                }
                print $arquivo_destino;
            }
        };

         array_walk($rotas, $checaRota);
         return $checaRota;

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
