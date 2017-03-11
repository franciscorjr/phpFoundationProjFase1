<?php
//Conexão com o Banco de Dados
require_once "conexaoDB.php";
$conn = conexaoDB();
require_once "header.php";

$email = 'email';
$senha = 'senha';


$p = $GLOBALS['_' . $_SERVER['REQUEST_METHOD']];

$val1 = trim($p[$email]);
$val2 = trim($p[$senha]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Verifica se o valor é vazio.
     */
    if (empty($val1) or empty($val2)) {
        echo "<script>sweetAlert('Oops...', 'Campos não informados!', 'error');</script>";
    }
    if (empty($val1)) {

        echo "<div class='alert alert-danger'>
                    O  campo $email está vazio
              </div>";
    }
    if (empty($val2)) {

        echo "<div class='alert alert-danger'>
                    O  campo $senha está vazio
              </div>";
    }


    $consulta = "SELECT senha FROM usuarios where email = '$val1'";
    $stmt = $conn->prepare($consulta);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);


    if(password_verify($val2,$resultado['senha'])){
        session_start();
        $_SESSION["logado"] = 1;
        echo "</br>";
        echo"<div class=\"alert alert-success\">
                Usuário conectado com sucesso, <a href=\"home\"> Voltar ao Site</a>
             </div>";
    }else{
        $_SESSION["logado"] = 0;
        echo "<script>sweetAlert('Oops...', 'E-mail ou senha Inválido!', 'error');</script>";
    }

}