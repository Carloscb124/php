<?php
session_start();

// se não estiver logado, volta
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

$nome = $_SESSION['user']['nome'];
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f5f5f5;
        }
        .box{
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            border-radius: 12px;
            background: white;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

<div class="box text-center">
    <h1 class="mb-4">Bem-vindo, <?= $nome ?>!</h1>

    <p class="lead">Você está logado no sistema.</p>

    <a href="../pages/index.php" class="btn btn-primary mt-3">Contatos</a>
    <a href="../controllers/logout.php" class="btn btn-danger mt-3">Sair</a>
</div>

</body>
</html>
