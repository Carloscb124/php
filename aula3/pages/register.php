<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro | Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        .form-control.prevent-autofill {
            background-color: #fff !important;
            background-image: none !important;
            color: #000 !important;
        }
    </style>
</head>

<body class="bg-light min-vh-100 d-flex align-items-center">
    <!-- Campos falsos para prevenir autocomplete -->
    <input type="text" name="prevent_autofill_username" style="display: none;">
    <input type="password" name="prevent_autofill_password" style="display: none;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow border-0">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                <i class="bi bi-person-plus text-white fs-1"></i>
                            </div>
                            <h2 class="card-title mb-2">Cadastrar</h2>
                            <p class="text-muted">Crie sua conta</p>
                        </div>
                        
                        <!-- controle de mensagens de feedback  -->
                        <?php if(isset($_GET['erro']) && $_GET['erro'] == 'email'): ?>
                            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                <div>Email já cadastrado.</div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if(isset($_GET['sucesso']) && $_GET['sucesso'] == 'true'): ?>
                            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center mb-4" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                <div>Cadastro realizado com sucesso!</div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <form action="../controllers/registerAction.php" method="POST" autocomplete="off" id="registerForm">
                            <div class="mb-3">
                                <label for="nome" class="form-label">
                                    <i class="bi bi-person me-1"></i> Nome
                                </label>
                                <input type="text" 
                                       class="form-control form-control-lg prevent-autofill" 
                                       name="nome" 
                                       id="nome" 
                                       required 
                                       autocomplete="off"
                                       placeholder="Seu nome completo">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="bi bi-envelope me-1"></i> Email
                                </label>
                                <input type="email" 
                                       class="form-control form-control-lg prevent-autofill" 
                                       name="email" 
                                       id="email" 
                                       required 
                                       autocomplete="new-email"
                                       placeholder="seu@email.com">
                            </div>

                            <div class="mb-4">
                                <label for="senha" class="form-label">
                                    <i class="bi bi-lock me-1"></i> Senha
                                </label>
                                <div class="input-group">
                                    <input type="password" 
                                           class="form-control form-control-lg prevent-autofill" 
                                           name="senha" 
                                           id="senha" 
                                           required 
                                           autocomplete="new-password"
                                           placeholder="Crie uma senha">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                                <div class="form-text">
                                    A senha deve ter pelo menos 6 caracteres.
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 py-2 mb-3">
                                <i class="bi bi-person-plus me-2"></i>
                                Cadastrar
                            </button>

                            <div class="text-center pt-3 border-top">
                                <p class="mb-0 mt-2">
                                    Já tem uma conta? 
                                    <a href="login.php" class="text-decoration-none fw-semibold">
                                        Faça login
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Toggle de senha
        document.getElementById('togglePassword').addEventListener('click', function() {
            const senhaInput = document.getElementById('senha');
            const icon = this.querySelector('i');
            
            if (senhaInput.type === 'password') {
                senhaInput.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                senhaInput.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        });

        // Prevenir autocomplete do Chrome
        document.addEventListener('DOMContentLoaded', function() {
            // Limpar campos
            setTimeout(() => {
                document.getElementById('nome').value = '';
                document.getElementById('email').value = '';
                document.getElementById('senha').value = '';
            }, 100);
            
            // Alternar background para prevenir autofill
            const inputs = document.querySelectorAll('.prevent-autofill');
            inputs.forEach(input => {
                input.addEventListener('animationstart', function(e) {
                    if (e.animationName === 'onAutoFillStart') {
                        this.classList.remove('prevent-autofill');
                    }
                });
            });
        });
    </script>
</body>
</html>