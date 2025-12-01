<?php

    include "conexao.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM contatos WHERE id = $id";
    $con -> query($sql);

    echo "
            <div class='alert alert-success alert-dismissible fade show mb-4' role='alert'>
                Contato adicionado com sucesso!
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            </div>
            ";

            echo "<meta http-equiv='refresh' content='1;URL=index.php'>";

?>