<?php

include "../conexao.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// verifica se o email já ta cadastrado
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $con->query($sql);

$user = $result->fetch_assoc();

if ($user) {
    // volta pro cadastro com mensagem de erro
    header("Location: ../pages/register.php?erro=email");
    exit;
}

// insere no banco
$sqlInsert = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($con->query($sqlInsert)) {
    // volta para o login com msg de sucesso
    header("Location: ../pages/login.php?cadastro=ok");
    exit;
} else {
    header("Location: ../pages/register.php?erro=banco");
    exit;
}

?>
