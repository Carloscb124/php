<?php

    function numeroAleatorio()
    {
        $number = rand(0, 10000);
        return $number;
    }

    // O ? significa “se for verdade, usa isso”.
    // O : significa “se não for verdade, usa aquilo”.
    // é um if e else mais compacto
    $n = numeroAleatorio();
    echo $n . " - " . ($n % 2 == 0 ? "Par" : "Ímpar");

?>