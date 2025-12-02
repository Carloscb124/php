<?php

// inicia a sessão para poder acessar ou destruir os dados dela
session_start();

// apaga todos os dados da sessão (desloga o usuário)
session_destroy();

// redireciona o usuário de volta para a página de login
header("Location: ../pages/login.php");

// encerra o script para garantir que nada mais seja executado
exit;
?>