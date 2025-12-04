<?php 

    include "../conexao.php";

    if($_POST){

        $nome_produto = $_POST['nome_produto'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];

        $sql = "INSERT INTO produtos(nome_produto, quantidade, preco, descricao) 
                    VALUES ('$nome_produto', '$quantidade', '$preco', '$descricao')";

        $con -> query($sql);

        header("Location: ../index.php");
        exit;

    }

?> 



