<?php
function verificaArquivo($arquivo)
{

    if (file_exists($arquivo . ".php")) {

        $rotas = ["home" => "home.php",
            "empresa" => "empresa.php",
            "produto" => "produto.php",
            "servico" => "servico.php",
            "contato" => "contato.php"];

        foreach ($rotas as $v => $valor) {

            if ($v == $arquivo) {
                if ($arquivo == "home") {
                    $arquivo_destino = $valor;
                } else if ($arquivo == "empresa") {
                    $arquivo_destino = $valor;
                } else if ($arquivo == "produto") {
                    $arquivo_destino = $valor;
                } else if ($arquivo == "servico") {
                    $arquivo_destino = $valor;
                } else if ($arquivo == "contato") {
                    $arquivo_destino = $valor;
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
