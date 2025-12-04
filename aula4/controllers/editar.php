<?php

include "../conexao.php";

if ($_POST) {

    $id = $_POST['id'];
    $nome = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE produtos 
            SET nome_produto = '$nome',
                quantidade = '$quantidade',
                preco = '$preco',
                descricao = '$descricao'
            WHERE id = $id";

    if ($con->query($sql)) {
        header("Location: ../pages/listar_produtos.php");
        exit;
    } else {
        echo "Erro ao atualizar o produto";
    }
}
