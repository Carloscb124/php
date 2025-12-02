<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
        .form-control.prevent-autofill {
            background-color: #fff !important;
            background-image: none !important;
            color: #000 !important;
        }
        
        .card-group > .card {
            border-radius: 8px;
            overflow: hidden;
        }
        
        .card-group > .card:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            border-right: 0;
        }
        
        .card-group > .card:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        @media (max-width: 768px) {
            .card-group {
                flex-direction: column;
            }
            
            .card-group > .card:first-child {
                border-radius: 8px 8px 0 0;
                border-right: 1px solid rgba(0,0,0,.125);
                border-bottom: 0;
            }
            
            .card-group > .card:last-child {
                border-radius: 0 0 8px 8px;
            }
        }
    </style>
</head>

<body class="min-vh-100 d-flex align-items-center">
    <!-- Campos falsos para prevenir autocomplete -->
    <input type="text" name="prevent_autofill_username" style="display: none;">
    <input type="password" name="prevent_autofill_password" style="display: none;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card-group mb-0 shadow">
                    <!-- Card de Registro -->
                    <div class="card p-4">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                                    <i class="bi bi-person-plus text-white fs-1"></i>
                                </div>
                                <h1 class="mb-2">Cadastrar</h1>
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
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <input type="text" 
                                           class="form-control form-control-lg prevent-autofill" 
                                           name="nome" 
                                           id="nome" 
                                           required 
                                           autocomplete="off"
                                           placeholder="Seu nome completo">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" 
                                           class="form-control form-control-lg prevent-autofill" 
                                           name="email" 
                                           id="email" 
                                           required 
                                           autocomplete="new-email"
                                           placeholder="seu@email.com">
                                </div>

                                <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <i class="fa fa-lock"></i>
                                    </span>
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

                                <!-- Botão centralizado -->
                                <div class="d-flex justify-content-center mb-3">
                                    <button type="submit" class="btn btn-primary px-4 py-2">
                                        <i class="bi bi-person-plus me-2"></i>
                                        Cadastrar
                                    </button>
                                </div>

                                <div class="text-center pt-3 border-top mt-4">
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
                    
                    <!-- Card de Informações (lado direito) -->
                    <div class="card text-white bg-primary" style="width:44%">
                        <div class="card-body d-flex align-items-center justify-content-center p-4">
                            <div class="text-center w-100">
                                <h2 class="mb-4">Já é cadastrado?</h2>
                                <p class="mb-4 px-3">
                                    Se você já possui uma conta, faça login para acessar todos os recursos 
                                    e funcionalidades disponíveis no nosso sistema.
                                </p>
                                <a href="login.php" class="btn btn-light mt-3 px-4 py-2">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>
                                    Fazer Login
                                </a>
                            </div>
                        </div>
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