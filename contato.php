<div class="container">
    <div class="jumbotron">
        <p class="lead">Entre em contato conosco através do formulário abaixo!</p>
    </div>
    <fieldset>
        <legend>Formulário de Contato</legend>
        <form class="form-horizontal" method="POST" action="index.php?arquivo=contato.php">
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Informe seu nome" name="nome">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" placeholder="Informe seu endereço de e-mail" name="email">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Assunto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Informe o assunto" name="assunto">
                </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Mensagem</label>
                <div class="col-sm-10">
                      <textarea class="form-control" rows="5" id="mensagem" name="mensagem"
                                placeholder="Digite sua mensagem aqui..."></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="btn-gravar" value="ok">Gravar</button>
                </div>
            </div>
        </form>
    </fieldset>

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
</div>
