<?php
include 'conexao.php';
include 'controllers/ultimos.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Estoque</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            background: #f4f6f5;
        }

        .navbar {
            background: #0d6efd;
            padding: 20px 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
        }

        .page-actions a {
            border-radius: 50px;
            font-weight: 600;
        }

        .table-box {
            background: white;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.07);
            border: 1px solid #e1e1e1;
        }

        .descricao-col {
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .table thead th {
            font-weight: 600;
            font-size: 15px;
        }

        h3 {
            font-weight: 700;
            color: #333;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="text-light m-0">Estoque</h1>
            <img src="./assets/inventory.png" width="60">
        </div>
    </nav>

    <div class="container mt-4 page-actions">

        <div class="d-flex justify-content-center gap-3 flex-wrap">

            <a href="pages/adicionar.php" class="btn btn-primary btn-lg px-4">
                <i class="bi bi-plus-circle"></i> Adicionar
            </a>

            <a href="pages/editar.php" class="btn btn-warning btn-lg px-4 text-white">
                <i class="bi bi-pencil-square"></i> Editar
            </a>

        </div>
    </div>

    <div class="container mt-5">

        <h3 class="text-center mb-4">Últimos Produtos Cadastrados</h3>

        <div class="table-box">

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle bg-white">
                    <thead class="table-primary">
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço (R$)</th>
                            <th>Valor Total (R$)</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($p = $ultimos->fetch_assoc()): ?>
                            <?php $total = $p['quantidade'] * $p['preco']; ?>

                            <tr>
                                <td class="text-center"><?= $p['id'] ?></td>
                                <td><?= $p['nome_produto'] ?></td>
                                <td class="text-center"><?= $p['quantidade'] ?></td>
                                <td class="text-center">R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                                <td class="text-center fw-bold">R$ <?= number_format($total, 2, ',', '.') ?></td>
                                <td class="descricao-col"><?= $p['descricao'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>
