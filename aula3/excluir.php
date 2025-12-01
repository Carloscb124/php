<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";
$con->query($sql);

// volta pro index carregando o alerta
header("Location: index.php?delete=ok");
exit;
?>
