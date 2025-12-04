<?php

include "conexao.php";

// pega os 5 mais recentes
$sql = "SELECT * FROM produtos ORDER BY id DESC LIMIT 5";
$ultimos = $con->query($sql);

?>