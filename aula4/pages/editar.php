<?php
include '../conexao.php';

if (!isset($_GET['id'])) {
    header("Location: listar_produtos.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$p = $con->query($sql)->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f5;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #0d6efd;
        }

        .form-container {
            max-width: 550px;
            margin: 45px auto;
            padding: 30px;
            border-radius: 16px;
            background: #ffffff;
            border: 1px solid #dcdcdc;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
        }

        .title-icon {
            font-size: 26px;
            margin-right: 10px;
        }

        input, textarea {
            background: #fdfdfd;
        }

        .btn-primary {
            background: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background: #0b5ed7;
        }

        .btn-outline-secondary:hover {
            background: #ededed;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark">
    <div class="container d-flex align-items-center">
        <span class="title-icon">✏️</span>
        <h1 class="text-light m-0">Editar Produto</h1>
    </div>
</nav>

<div class="container">
    <div class="form-container">

        <form action="../controllers/editar.php" method="POST">

            <input type="hidden" name="id" value="<?= $p['id'] ?>">

            <div class="mb-3">
                <label class="form-label fw-semibold">Nome do Produto</label>
                <input type="text" name="nome_produto" class="form-control" value="<?= $p['nome_produto'] ?>" required>
            </div>

            <div class="mb-3 d-flex gap-3">
                <div class="flex-fill">
                    <label class="form-label fw-semibold">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" value="<?= $p['quantidade'] ?>" required>
                </div>

                <div class="flex-fill">
                    <label class="form-label fw-semibold">Preço</label>
                    <input type="number" step="0.01" name="preco" class="form-control" value="<?= $p['preco'] ?>" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Descrição</label>
                <textarea name="descricao" rows="3" class="form-control"><?= $p['descricao'] ?></textarea>
            </div>

            <button class="btn btn-primary w-100 py-2 fw-semibold">Salvar Alterações</button>
        </form>

        <div class="text-center mt-4">
            <a href="listar_produtos.php" class="btn btn-outline-secondary px-4">Cancelar</a>
        </div>

    </div>
</div>

</body>
</html>
