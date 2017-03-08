<?php
require_once "conexaoDB.php";

echo "#### Executando Fixture ####";

$conn = conexaoDB();

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