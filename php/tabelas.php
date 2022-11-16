<?php
// A função 'pg_connect' conecta ao banco de dados e retorna
// '1' se a conexão for bem sucedida e '0' do contrário.

//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', '123456');
define('DBNAME', 'Easydate');
define('PORT', '5432');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {
    $conn = new pdo('pgsql:host=' . HOST . ';port=' . PORT . ';dbname=' . DBNAME, USER, PASS);
    echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}

$QUERY="select * from easy.produtos";

// Verifica se não ocorreu nenhum erro na consulta.
if (!$QUERY) {
  print "Um erro ocorreu na consulta !";
  exit;
}
      
// A função 'pg_num_fields' retorna o número de campos da
// tabela.
//$NUM_FIELDS = pg_num_fields($QUERY);
      
//for ($L=0; $L<$NUM_FIELDS; $L++){

  // 'pg_field_name' retorna o nome do '$L'-ésimo campo da
  // tabela.  
  //$FIELD = pg_field_name($QUERY, $L);

  // Imprime o nome do campo.
  //print $FIELD;

//}
?>