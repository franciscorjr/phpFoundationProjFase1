<?php
function conexaoDB()
{
    try {
        $config = include("config.php");
        if (!isset($config['db'])) {
            throw new \InvalidArgumentException("Configuração do banco de dados não existe!");
        }

        $host = (isset($config['db']['host'])) ? $config['db']['host'] : null;
        $dbname = (isset($config['db']['dbmane'])) ? $config['db']['dbmane'] : null;
        $user = (isset($config['db']['user'])) ? $config['db']['user'] : null;
        $password = (isset($config['db']['password'])) ? $config['db']['password'] : null;

         $pdo = new PDO("mysql:host=localhost;dbname=fixture", $user, $password);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $pdo;

    } catch (\PDOException $e) {
        echo $e->getMessage() . "\n";
        echo $e->getTraceAsString() . "\n";
    }
}