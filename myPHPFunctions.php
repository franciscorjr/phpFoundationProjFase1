<?php
function verificaArquivo($arquivo)
{

    if (file_exists($arquivo . ".php")) {

        $rotas = ["home", "empresa", "produto", "servico", "contato"];

        foreach ($rotas as $v) {

            if ($v == $arquivo) {
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
            }
        }
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
