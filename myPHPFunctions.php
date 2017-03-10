<?php
/**
 * @param $arquivo
 * @return mixed
 */
function verificaArquivo($arquivo)
{

    if (file_exists($arquivo . ".php")) {

        $rotas = ["home" => "home.php",
            "empresa" => "empresa.php",
            "produto" => "produto.php",
            "servico" => "servico.php",
            "contato" => "contato.php",
            "pesquisa" => "pesquisa.php"];

        foreach ($rotas as $v => $valor) {
            //Realiza conexão com o DB
            require_once "conexaoDB.php";
            $conn = conexaoDB();

            if ($v == $arquivo) {
                if ($arquivo == "pesquisa") {
                    $texto = 'texto'; //nome do campo no formulario.


                    $p = $GLOBALS['_' . $_SERVER['REQUEST_METHOD']];

                    $val1 = trim($p[$texto]);

                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        /**
                         * Verifica se o valor é vazio.
                         */
                        if (empty($val1)) {
                            echo "<script>sweetAlert('Oops...', 'Campos não informados!', 'error');</script>";
                        }
                        if (empty($val1)) {
                            /*
                            echo "<div class='alert alert-danger'>
                                        O  campo $texto está vazio
                                  </div>";*/
                        }


                        /**
                         * Por fim, o resultado final.
                         */
                        if (!empty($val1)) {
                            /*
                            echo "<div class='alert alert-success'>
                                       O valor do campo $texto é: $val1
                                  </div>";*/
                        }

                        $consulta = "SELECT * FROM paginas where conteudo like '%$val1%'";
                        $stmt = $conn->prepare($consulta);
                        $stmt->execute();
                        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $table = "<table class=\"table\">
                                    <thead>
                                      <tr>
                                        <th>Página</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                        foreach ($resultado as $r) {
                            $nome_pagina = $r['nom_pagina'];
                            $nome_rota = $r['nom_rota'];
                            $table .= "<tr>
                                            <td><a href=\"$nome_rota\">$nome_pagina</a></td>
                                        </tr>";
                        }
                        $table .= "</tbody>
                                  </table>";
                        //echo $table;
                        return $table;

                    }
                } else {
                    $consulta = "SELECT * FROM paginas where nom_rota = '$arquivo'";
                    $stmt = $conn->prepare($consulta);
                    $stmt->execute();
                    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
                    $arquivo_destino = $resultado['nom_pagina'];
                }

            }
        }
        return $arquivo_destino;


    } else {
        //Realiza conexão com o DB
        require_once "conexaoDB.php";
        $conn = conexaoDB();
        header("HTTP/1.0 404 Not Found"); //Funciona em alguns servidores e em outros não, por isso usei os 2
        header("Status: 404 Not Found");  //Funciona em alguns servidores e em outros não, por isso usei os 2
        $consulta = "SELECT * FROM paginas where nom_rota = '404'";
        $stmt = $conn->prepare($consulta);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $arquivo_destino = $resultado['nom_pagina'];
        return $arquivo_destino;
    }
}

date_default_timezone_set('America/Manaus');

function pegaInfoData($var)
{
    return date($var);
}

function carregaConteudo($nom_pagina)
{
    require_once "conexaoDB.php";
    $conn = conexaoDB();
    $consulta = "SELECT * FROM paginas where nom_pagina = '$nom_pagina'";
    $stmt = $conn->prepare($consulta);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
    return $conteudo = $resultado['conteudo'];
}
