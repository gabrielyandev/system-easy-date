<?php 
    include_once("conexao.php");

    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];

    $sql="INSERT INTO easydate (usuario,pass) VALUES ('$usuario', '$pass')";

    if (mysqli_query($conexao, $sql)) {
      header("location: ../pages/home.html");
    } 
    
    else {
        echo "Erro " . mysqli_error($conexao);
    }
    mysqli_close($conexao);