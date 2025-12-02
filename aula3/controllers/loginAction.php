<?php
session_start();
include "../conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

// busca pelo email
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $con->query($sql);
$user = $result->fetch_assoc();

// se encontrou o email
if ($user) {

    // verifica se a senha digitada confere com o hash do banco
    if (password_verify($senha, $user['senha'])) {

        $_SESSION['user'] = $user;

        header("Location: ../pages/home.php");
        exit;
    } 
    
    // senha incorreta
    header("Location: ../pages/login.php?erro=senha");
    exit;
}

// email não encontrado
header("Location: ../pages/login.php?erro=email");
exit;
?>