<?php 

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "estoque";

    // conexão com o banco
    $con = new mysqli($host, $usuario, $senha, $banco);

    if($con -> connect_error){
        die("Erro de Conexão" . $con -> connect_error);
    }

?>