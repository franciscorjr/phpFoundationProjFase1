<?php
//Conexão com o Banco de Dados
require_once "conexaoDB.php";
$conn = conexaoDB();

$editor1 = 'editor1';
$pagina  = 'pagina';


$p = $GLOBALS['_' . $_SERVER['REQUEST_METHOD']];

$val1 = trim($p[$editor1]);
$val2 = trim($p[$pagina]);

echo $val1;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Verifica se o valor é vazio.
     */
    if (empty($val1) or empty($val2)) {
        echo "<script>sweetAlert('Oops...', 'Campos não informados!', 'error');</script>";
    }
    if (empty($val1)) {

        echo "<div class='alert alert-danger'>
                    O  campo $editor1 está vazio
              </div>";
    }
    if (empty($val2)) {

        echo "<div class='alert alert-danger'>
                    O  campo $pagina está vazio
              </div>";
    }


    $atualizacao = "update paginas set conteudo = :conteudo where nom_pagina = :pagina";
    $stmt = $conn->prepare($atualizacao);
    $stmt->bindValue(conteudo,$val1);
    $stmt->bindValue(pagina,$val2);
    $stmt->execute();
    echo "<script>swal('Página $val2', 'Atualizada com sucesso!!!', 'success')</script>";


}