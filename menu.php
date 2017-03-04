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
            <h3 class="text-muted">PHP Foundation - Projeto 1</h3>
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
