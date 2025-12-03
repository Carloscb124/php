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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

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

<nav class="navbar navbar-dark bg-dark px-3 py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="text-light text-center">
            <h1 class="mb-0">Bem-vindo, <?= $nome ?>!</h1>
            <p class="lead mb-0">Você está logado no sistema.</p>
        </div>

        <div class="d-flex align-items-center gap-3">
            <a href="../controllers/logout.php" class="btn btn-outline-danger">
                <i class="bi bi-box-arrow-right me-1"></i> Sair
            </a>  
        </div>
    </div>
</nav>

<div class="container d-flex justify-content-end align-itens-center gap-2">

    <a href="../pages/index.php" class="btn btn-primary mt-3">Agenda de contatos</a>
    <a href="../controllers/adicionar.php" class="btn btn-secondary mt-3">Adicionar Contato</a>
    <a href="user.php" class="btn btn-warning mt-3">Usuários</a>
    
</div>

</div>

</body>
</html>
