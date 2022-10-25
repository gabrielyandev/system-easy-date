<?php 
    $servidor = "localhost";
    $user = "root";
    $passw = "";
    $easydate = "easydate";

    $conexao = mysqli_connect($servidor, $user, $passw, $easydate);
    if(!$conexao) {
        die("Houve um erro ao conectar: ".mysqli_connect_errno());
    }