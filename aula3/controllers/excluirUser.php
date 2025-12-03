<?php
include "../conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id = $id";
$con->query($sql);

// volta pro index carregando o alerta
header("Location: ../pages/user.php?delete=ok");
exit;
?>