<?php

include "../conexao.php";

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha']; // pega a senha antes

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// verifica email duplicado
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $con->query($sql);
$user = $result->fetch_assoc();

if ($user) {
    header("Location: ../pages/register.php?erro=email");
    exit;
}

// insere no banco
$sqlInsert = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senhaHash')";
if ($con->query($sqlInsert)) {
    header("Location: ../pages/login.php?cadastro=ok");
    exit;
} else {
    header("Location: ../pages/register.php?erro=banco");
    exit;
}
