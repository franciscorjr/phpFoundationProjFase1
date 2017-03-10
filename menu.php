<?php
    if($path == "home"){
        $active_home = "active";
    }else if ($path == "empresa"){
        $active_empresa = "active";
    }else if ($path == "produto"){
        $active_produto = "active";
    }else if ($path == "servico"){
        $active_servico = "active";
    }else if ($path == "contato"){
        $active_contato = "active";
    }
?>
<body>
    <div class="container">
        <div class="masthead">
            <form class="form-horizontal" method="POST" action="pesquisa">
                <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Pesquisar</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" placeholder="Pesquisar no site: Contato" name="texto">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-primary" name="btn-gravar" value="ok">Pesquisar</button>
                    </div>
                </div>
            </form>
            <nav>
                <ul class="nav nav-justified">
                    <li class="<?php echo $active_home;?>"><a href="home">Home</a> </li>
                    <li class="<?php echo $active_empresa;?>"><a href="empresa">Empresa</a> </li>
                    <li class="<?php echo $active_produto;?>"><a href="produto">Produtos</a> </li>
                    <li class="<?php echo $active_servico;?>"><a href="servico">Serviços</a> </li>
                    <li class="<?php echo $active_contato;?>"><a href="contato">Contato</a> </li>
                </ul>
            </nav>
        </div>    
