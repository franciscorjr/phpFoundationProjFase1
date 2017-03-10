<?php
$nome = 'nome'; //nome do campo no formulario.
$email = 'email'; //nome do campo no formulario.
$assunto = 'assunto'; //nome do campo no formulario.
$mensagem = 'mensagem'; //nome do campo no formulario.

$p = $GLOBALS['_' . $_SERVER['REQUEST_METHOD']];

$val1 = trim($p[$nome]);
$val2 = trim($p[$email]);
$val3 = trim($p[$assunto]);
$val4 = trim($p[$mensagem]);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    /**
     * Verifica se o valor é vazio.
     */
    if (empty($val1) and empty($val2) and empty($val3) and empty($val4)) {
        echo "<script>sweetAlert('Oops...', 'Campos não informados!', 'error');</script>";
    }
    if (empty($val1)) {
        echo "<div class='alert alert-danger'>
                    O  campo $nome está vazio
                  </div>";
    }
    if (empty($val2)) {
        echo "<div class='alert alert-danger'>
                    O  campo $email está vazio
                  </div>";
    }
    if (empty($val3)) {
        echo "<div class='alert alert-danger'>
                    O  campo $assunto está vazio
                  </div>";
    }
    if (empty($val4)) {
        echo "<div class='alert alert-danger'>
                    O  campo $mensagem está vazio
                  </div>";
    }

    /**
     * Por fim, o resultado final.
     */
    if (!empty($val1)) {
        echo "<div class='alert alert-success'>
                    O valor do campo $nome é: $val1
                  </div>";
    }
    if (!empty($val2)) {
        echo "<div class='alert alert-success'>
                    O valor do campo $email é: $val2
                  </div>";
    }
    if (!empty($val3)) {
        echo "<div class='alert alert-success'>
                    O valor do campo $assunto é: $val3
                  </div>";
    }
    if (!empty($val4)) {
        echo "<div class='alert alert-success'>
                    O valor do campo $mensagem é: $val4
                  </div>";
    }
    if (!empty($val1) and !empty($val2) and !empty($val3) and !empty($val4)) {
        echo "<script>swal('Dados enviados com sucesso!', 'Abaixo sequem os dados que você enviou!', 'success')</script>";
    }
}
?>