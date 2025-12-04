<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #198754;
            padding: 20px 0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        .form-label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #198754;
            border: none;
        }

        .btn-primary:hover {
            background-color: #157347;
        }

        .btn-outline-secondary:hover {
            background-color: #e2e2e2;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <h1 class="text-light m-0">Adicionar Produto</h1>
        <i class="bi bi-box-seam text-light" style="font-size: 40px;"></i>
    </div>
</nav>

<div class="container">
    <div class="form-container">
        <form action="../controllers/adicionar.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nome do Produto</label>
                <input type="text" name="nome_produto" class="form-control" placeholder="Ex: Arroz Tipo 1" required>
            </div>

            <div class="mb-3 d-flex gap-3">
                <div class="flex-fill">
                    <label class="form-label">Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" placeholder="Ex: 10" required>
                </div>

                <div class="flex-fill">
                    <label class="form-label">Preço</label>
                    <input type="number" step="0.01" name="preco" class="form-control" placeholder="Ex: 5.99" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea name="descricao" rows="3" class="form-control" placeholder="Ex: Embalagem de 5kg"></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Salvar Produto</button>
        </form>

        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-outline-secondary px-4">Voltar</a>
        </div>
    </div>
</div>

</body>
</html>
