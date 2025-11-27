<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "agenda";

    // conexão com o banco
    $con = new mysqli($host, $usuario, $senha, $banco);

    if($con -> connect_error){
        die("erro na conexão: " .$con -> connect_error);
    }
?>