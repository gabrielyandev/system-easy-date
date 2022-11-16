<?php
//Incluindo a conexão com banco de dados
include_once("../php/conexao.php");	
//O campo usuário e senha preenchido entra no if para validar
if((isset($_POST['MESTRE'])) && (isset($_POST['999999']))){
  $usuario = pg_escape_string($conn, $_POST['usuario']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
  $senha = pg_escape_string($conn, $_POST['senha']);
  $senha = md5($senha);
  //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
  $result_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
  $resultado_usuario = pg_query($conn, $result_usuario);
  $resultado = pg_fetch_assoc($resultado_usuario);
   //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
   if(isset($resultado)){
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    header('location:../pages/home.html'); 
 }
}
?>