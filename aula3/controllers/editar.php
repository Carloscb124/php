<?php

include "../conexao.php";

// recebe o ID do contato enviado na URL
$id = $_GET['id'];
// consulta o SQL
$sql = "SELECT * FROM contatos WHERE id = $id";
// executa a consulta
$contato = $con->query($sql)->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    body {
        background: #ffffffff;
    }

    .card-modern {
        border-radius: 20px;
        padding: 35px;
        border: none;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .btn-modern {
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
    }

    .label-modern {
        font-weight: 600;
    }
</style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark px-3 py-4 mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h2 class="text-white m-0">Editar Contato</h2>
            <a href="../pages/index.php" class="btn btn-outline-light">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </nav>

    <div class="container mt-5">

    <?php
            // verifica se o form foi enviado
            if ($_POST) {
                // recebe os valores enviados pelo form
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];

                // monta a consulta SQL para atualizar o banco
                $sql = "UPDATE contatos SET nome = '$nome', telefone = '$telefone', email = '$email' WHERE id = $id";

                // executa a atualização do BD
                $con->query($sql);

                //exibe o alerta e redireciona de volta para a pagina inicial
                echo "
            <div class='alert alert-success alert-dismissible fade show mb-4' role='alert'>
                Contato atualizado com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            </div>
            ";

                echo "<meta http-equiv='refresh' content='1;URL=../pages/index.php'>";
            }

            ?>

        <div class="card card-modern mx-auto bg-white" style="max-width: 420px;">

            <h3 class="text-center mb-4">Editar Contato</h3>

            <form method="post">
                <div class="mb-3">
                    <label class="label-modern">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome" required value="<?= $contato['nome'] ?>">
                </div>

                <div class="mb-3">
                    <label class="label-modern">Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone" required value="<?= $contato['telefone'] ?>">
                </div>

                <div class="mb-3">
                    <label class="label-modern">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o email" required value="<?= $contato['email'] ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-modern w-100">
                    Salvar
                </button>
            </form>

        </div>
    </div>

</body>

</body>

</html>