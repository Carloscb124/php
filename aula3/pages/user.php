<?php
include "../conexao.php";

$sql = "SELECT * FROM usuarios ORDER BY nome";
$res = $con->query($sql);

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <style>
    .tabela-flutuante {
      background: #ffffff;
      border-radius: 12px;
      padding: 25px;
      box-shadow:
        0 10px 25px rgba(0, 0, 0, 0.35),
        0 4px 10px rgba(0, 0, 0, 0.4),
        0 0 15px rgba(255, 255, 255, 0.05);
      transform: translateY(0);
      transition: transform .2s ease;
    }

    .tabela-flutuante:hover {
      transform: translateY(-4px);
    }

    .acao-col {
      text-align: center;
      white-space: nowrap;
    }
  </style>
</head>

<body class="bg-ligth">

  <nav class="navbar navbar-dark bg-dark px-3 py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="text-white m-0">Usuários</h2>
        <div class="d-flex align-items-center gap-3">
            <a href="../controllers/adicionarUser.php" class="btn btn-outline-light">
                <i class="bi bi-plus-circle me-1"></i> Adicionar Usuarios
            </a>
            <a href="home.php" class="btn btn-outline-light">
                <i class="bi bi bi-arrow-left me-1"></i> Voltar
            </a> 
        </div>
    </div>
</nav>

  <div class="container mt-5">

    <div class="tabela-flutuante">

      <?php if (isset($_GET['delete']) && $_GET['delete'] === 'ok'): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
          Contato excluído com sucesso!
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>

        <!-- recarrega sozinho depois de 1s -->
        <meta http-equiv="refresh" content="1;URL=user.php">
      <?php endif; ?>



      <table class="table table-striped table-bordered mb-0">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($c = $res->fetch_assoc()): ?>
            <tr>
              <td><?= $c['id'] ?></td>
              <td><?= $c['nome'] ?></td>
              <td><?= $c['email'] ?></td>

              <td class="acao-col">
                <a href="../controllers/editarUser.php?id=<?= $c['id'] ?>" class="btn btn-sm btn-primary me-1">
                  <i class="bi bi-pencil-square"></i>Editar
                </a>

                <a
                  href="../controllers/excluirUser.php?id=<?= $c['id'] ?>"
                  class="btn btn-sm btn-danger"
                  onclick="return confirm('Tem certeza que quer excluir esse contato?')">
                  <i class="bi bi-trash"></i>Excluir
                </a>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>

      </table>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>