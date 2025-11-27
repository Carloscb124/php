<?php
// Inclui o arquivo de conexão com o banco de dados
include "conexao.php";
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>

</style>

<body>

 <nav class="navbar navbar-dark bg-dark pd-5 b-5 ">
  <div class="container d-flex justify-content-center align-items-center">
    <h2 class="text-white me-3">Agenda de Contato</h2>
    <a href="adicionar.php" class="btn btn-outline-light">Adicionar Contato</a>
  </div>
</nav>


  <table style="border: 1px solid #000;" cellpadding="8">

    <!-- Cabeçalho da tabela -->
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Ações</th>
    </tr>

    <?php
    // Consulta os contatos ordenados pelo nome
    $sql = "SELECT * FROM contatos ORDER BY nome";

    // Executa a query
    $res = $con->query($sql);

    // Percorre cada linha retornada pelo banco
    while ($c = $res->fetch_assoc()):
    ?>

      <tr>
        <!-- Exibe os dados de cada coluna -->
        <td><?= $c['id'] ?></td>
        <td><?= $c['nome'] ?></td>
        <td><?= $c['telefone'] ?></td>
        <td><?= $c['email'] ?></td>

        <td>
          <!-- Botão de editar passando o id pela URL -->
          <a href="editar.php?id=<?= $c['id'] ?>">Editar</a>

          <!-- Botão de excluir passando o id pela URL -->
          <a href="excluir.php?id=<?= $c['id'] ?>">Excluir</a>
        </td>
      </tr>

    <?php endwhile; ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>