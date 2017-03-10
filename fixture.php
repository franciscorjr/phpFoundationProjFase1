<?php
require_once "conexaoDB.php";

echo "#### Executando Fixture ####";

$conn = conexaoDB();
/*
echo "### Removendo tabela ###";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " - OK\n";

echo "### Criando tabela ###";
$conn->query("CREATE TABLE teste (
      id    INT NOT NULL AUTO_INCREMENT,
      nome  varchar(45)  NULL,
      PRIMARY KEY (id));");
echo " - OK\n";

echo "### Inserindo dados ####";
for ($x = 0; $x <= 9; $x++) {
    $nome = "Teste teste - {$x}";
    $smt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome)");
    $smt->bindParam(":nome", $nome);
    $smt->execute();
}

echo " - OK\n";

echo "### Concluido ####";
*/

//Construindo Páginas e Salvando no MySQL
$conn->query("DROP TABLE IF EXISTS paginas;");
$conn->query("CREATE TABLE paginas (
      id    INT NOT NULL AUTO_INCREMENT,
      nom_pagina  varchar(45)  NULL,
      nom_rota    varchar(45)  NULL,
      conteudo  varchar(5000)  NULL,
      PRIMARY KEY (id));");

for ($i = 1; $i <= 6; $i++) {
    if ($i == 1) {
        $nom_pagina = "home.php";
        $nom_rota = "home";
        $conteudo = "<div class=\"jumbotron\">
    <h1>Bem Vindo!</h1>
    <p class=\"lead\">Primeiro projeto do Curso de PHP Foundation da Code Education, Fase 1.</p>
</div>";
    } else if ($i == 2) {
        $nom_pagina = "empresa.php";
        $nom_rota = "empresa";
        $conteudo = "<div class=\"jumbotron\">
    <h1>Quem somos?</h1>
    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetuer adipiscing</p> 
    <span>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
        I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When..</span>
</div>";
    } else if ($i == 3) {
        $nom_pagina = "produto.php";
        $nom_rota = "produto";
        $conteudo = "<div class=\"jumbotron\">
    <h1>Nossos Produtos</h1>
    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetuer adipiscing</p> 
    <span>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
        I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When..</span>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <h2>Safari bug warning!</h2>
            <p class=\"text-danger\">As of v9.1.2, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
        <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
        <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
    </div>
</div>";
    } else if ($i == 4) {
        $nom_pagina = "servico.php";
        $nom_rota = "servico";
        $conteudo = "<div class=\"jumbotron\">
    <h1>Nossos Serviços</h1>
    <p class=\"lead\">Lorem ipsum dolor sit amet, consectetuer adipiscing</p> 
    <span>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.
        I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When..</span>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <h2>Safari bug warning!</h2>
            <p class=\"text-danger\">As of v9.1.2, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
        <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
        <div class=\"col-lg-4\">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <p><a class=\"btn btn-primary\" href=\"#\" role=\"button\">Saiba mais &raquo;</a></p>
        </div>
    </div>
</div>";
    } else if ($i == 5) {
        $nom_pagina = "contato.php";
        $nom_rota = "contato";
        $conteudo = "<div class=\"container\">
    <div class=\"jumbotron\">
        <p class=\"lead\">Entre em contato conosco através do formulário abaixo!</p>
    </div>
    <fieldset>
        <legend>Formulário de Contato</legend>
        <form class=\"form-horizontal\" method=\"POST\" action=\"contato\">
            <div class=\"form-group\">
                <label class=\"col-sm-2 col-sm-2 control-label\">Nome</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Informe seu nome\" name=\"nome\">
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-2 col-sm-2 control-label\">E-mail</label>
                <div class=\"col-sm-10\">
                    <input type=\"email\" class=\"form-control\" placeholder=\"Informe seu endereço de e-mail\" name=\"email\">
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-2 col-sm-2 control-label\">Assunto</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Informe o assunto\" name=\"assunto\">
                </div>
            </div>

            <div class=\"form-group\">
                  <label class=\"col-sm-2 col-sm-2 control-label\">Mensagem</label>
                <div class=\"col-sm-10\">
                      <textarea class=\"form-control\" rows=\"5\" id=\"mensagem\" name=\"mensagem\"
                                placeholder=\"Digite sua mensagem aqui...\"></textarea>
                </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-gravar\" value=\"ok\">Gravar</button>
                </div>
            </div>
        </form>
    </fieldset>
</div>";
    }else if ($i == 6) {
        $nom_pagina = "404.php";
        $nom_rota = "404";
        $conteudo = "<div class=\"jumbotron\">
    <h1>Erro 404 - Página não encontrada</h1>
    <p class=\"lead\">A URL informada não é válida, <a href=\"home\">clique aqui para ir ao Home</a></p>
</div>";
    }
    $smt = $conn->prepare("INSERT INTO paginas (nom_pagina,nom_rota,conteudo) VALUE (:nome,:rota,:conteudo)");
    $smt->bindParam(":nome", $nom_pagina);
    $smt->bindParam(":rota", $nom_rota);
    $smt->bindParam(":conteudo", $conteudo);
    $smt->execute();
}
echo "### Importação Concluida ####";

