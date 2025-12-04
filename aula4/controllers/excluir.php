<?php

include "../conexao.php";

if (!isset($_GET['id'])) {
    header("Location: ../pages/listar_produtos.php");
    exit;
}

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id = $id";

if ($con->query($sql)) {
    header("Location: ../pages/listar_produtos.php");
    exit;
} else {
    echo "Erro ao excluir o produto";
}

?>