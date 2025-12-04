<?php
include '../conexao.php';

$sql = "SELECT * FROM produtos ORDER BY id DESC";
$produtos = $con->query($sql);
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

        .table-box {
            background: #ffffff;
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.06);
            border: 1px solid #dcdcdc;
        }

        .title-icon {
            font-size: 26px;
            margin-right: 10px;
        }

        .btn-warning {
            color: #fff;
        }

        .btn-danger {
            color: #fff;
        }

        .btn-dark {
            background: #212529;
        }

        th {
            font-weight: 600;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-dark mb-4">
    <div class="container d-flex align-items-center">
        <span class="title-icon">📝</span>
        <h1 class="text-light m-0">Editar Produtos</h1>
    </div>
</nav>

<div class="container">

    <div class="table-box">

        <table class="table table-striped table-bordered align-middle">
            <thead class="table-primary">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Qtd</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($p = $produtos->fetch_assoc()): ?>
                <tr>
                    <td class="text-center"><?= $p['id'] ?></td>
                    <td><?= $p['nome_produto'] ?></td>
                    <td class="text-center"><?= $p['quantidade'] ?></td>
                    <td class="text-center">R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                    <td class="text-center">

                        <a href="editar.php?id=<?= $p['id'] ?>" 
                           class="btn btn-warning btn-sm px-3">
                           Editar
                        </a>

                        <button class="btn btn-danger btn-sm px-3"
                                data-bs-toggle="modal"
                                data-bs-target="#modalExcluir"
                                data-id="<?= $p['id'] ?>"
                                data-nome="<?= $p['nome_produto'] ?>">
                            Excluir
                        </button>

                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="text-center mt-3">
            <a href="../index.php" class="btn btn-dark px-4">Voltar</a>
        </div>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalExcluir" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Confirmar Exclusão</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        Deseja realmente excluir o produto  
        <strong id="nomeProduto"></strong>?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancelar
        </button>

        <a id="btnConfirmarExcluir" 
           href="#" 
           class="btn btn-danger">
           Excluir
        </a>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
const modal = document.getElementById('modalExcluir');

modal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const id = button.getAttribute('data-id');
    const nome = button.getAttribute('data-nome');

    document.getElementById('nomeProduto').textContent = nome;
    document.getElementById('btnConfirmarExcluir').href = "../controllers/excluir.php?id=" + id;
});
</script>

</body>
</html>
