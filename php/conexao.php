<?php

//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', '2031755730');
define('DBNAME', 'Easydate');
define('PORT', '5432');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {
    $conn = new pdo('pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);
    header("location:home.html");
    die("Erro: VOCÊ NÃO PODE ACESSAR ESTA PÁGINA!");
    //echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada. Erro gerado " . $e->getMessage();
}
?>