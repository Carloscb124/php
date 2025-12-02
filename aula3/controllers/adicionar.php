<?php
include "../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>

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
            <h2 class="text-white m-0">Cadastratar Contato</h2>
            <a href="../pages/index.php" class="btn btn-outline-light">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
    </nav>

    <div class="container mt-5">

        <?php
        if ($_POST) {
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $sql = "INSERT INTO contatos(nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";
            $con->query($sql);

            echo "
            <div class='alert alert-success alert-dismissible fade show mb-4' role='alert'>
                Contato adicionado com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            </div>
            ";

            echo "<meta http-equiv='refresh' content='1;URL=../pages/index.php'>";
        }
        ?>

        <div class="card card-modern mx-auto bg-white" style="max-width: 420px;">
            <h3 class="text-center mb-4">Cadastrar Contato</h3>

            <form method="post">
                <div class="mb-3">
                    <label class="label-modern">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o nome" required>
                </div>

                <div class="mb-3">
                    <label class="label-modern">Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="Digite o telefone" required>
                </div>

                <div class="mb-3">
                    <label class="label-modern">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o email" required>
                </div>

                <button type="submit" class="btn btn-primary btn-modern w-100">
                    Salvar Contato
                </button>
            </form>
        </div>
    </div>

</body>

</html>