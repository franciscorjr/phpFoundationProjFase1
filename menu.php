<?php
if ($path == "home") {
    $active_home = "active";
} else if ($path == "empresa") {
    $active_empresa = "active";
} else if ($path == "produto") {
    $active_produto = "active";
} else if ($path == "servico") {
    $active_servico = "active";
} else if ($path == "contato") {
    $active_contato = "active";
}
?>
<body>
<div class="container">
    <div class="masthead">
        <form class="form-horizontal" method="POST" action="pesquisa">
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Pesquisar</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" placeholder="Pesquisar no site: Contato" name="texto">
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary" name="btn-gravar" value="ok">Pesquisar</button>
                    <?php
                    if (isset($_SESSION["logado"]) and $_SESSION["logado"] == 1) { ?>
                        <a href="logout"> <button type="button" class="btn btn-danger" >Logout</button></a>
                    <?php } else if (!isset($_SESSION["logado"]) or $_SESSION["logado"] == 0) { ?>
                        <button type = "button" class="btn btn-info" data-toggle = "modal" data-target = "#myModal" > Login</button >
                    <?php }
                    if (isset($_SESSION["logado"]) and $_SESSION["logado"] == 1) {
                        echo "<button type=\"button\" class=\"btn btn-warning\" >Editar</button>";
                    }
                    ?>
                </div>
            </div>
        </form>
        <nav>
            <ul class="nav nav-justified">
                <li class="<?php echo $active_home; ?>"><a href="home">Home</a></li>
                <li class="<?php echo $active_empresa; ?>"><a href="empresa">Empresa</a></li>
                <li class="<?php echo $active_produto; ?>"><a href="produto">Produtos</a></li>
                <li class="<?php echo $active_servico; ?>"><a href="servico">Serviços</a></li>
                <li class="<?php echo $active_contato; ?>"><a href="contato">Contato</a></li>
            </ul>
        </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="validaLogin">
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Informe seu e-mail" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Senha</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Informe sua senha"
                                       name="senha">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success" name="btn-gravar" value="ok">Entrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>

        </div>
    </div>
