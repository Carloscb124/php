<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      html, body{
        height: 100%;
      }
      .form-signin{
        max-width: 330px;
        padding: 1rem;
      }
    </style>
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
      <form action="../controllers/registerLogin.php" method="POST">
        
        <input type="hidden" name="action" value="login">

        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

        <div class="form-floating mb-2">
          <input type="email" class="form-control" id="email" name="email" placeholder="Seu email" required>
          <label for="email">Email</label>
        </div>

        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
          <label for="senha">Senha</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>

        <p class="mt-3 text-center">
          <a href="register.php">Não tenho conta</a>
        </p>

      </form>
    </main>

  </body>
</html>
