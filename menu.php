<?php
    if($_GET["arquivo"] == "home.php"){
        $active_home = "active";
    }else if ($_GET["arquivo"] == "empresa.php"){
        $active_empresa = "active";
    }else if ($_GET["arquivo"] == "produto.php"){
        $active_produto = "active";
    }else if ($_GET["arquivo"] == "servico.php"){
        $active_servico = "active";
    }else if ($_GET["arquivo"] == "contato.php"){
        $active_contato = "active";
    }else{
        $_GET["arquivo"] = "home.php";
        $active_home = "active";
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
