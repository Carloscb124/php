<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #ecebebff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background: #fff;
        padding: 25px;
        border-radius: 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        width: 320px;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    label {
        font-size: 15px;
        font-weight: 600;
        color: #444;
    }

    input,
    select {
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ddd;
        font-size: 15px;
    }

    button {
        background: #006e;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: .2s;
    }

    button:hover {
        background: #0053c7;
    }

    h3 {
        margin-top: 25px;
        text-align: center;
        color: #222;
    }
</style>

<body>

    <div class="container">

        <h2>Calculadora Simples</h2>

        <form method="post">

            <Label>Valor1</Label>
            <input type="number" name="valor1" required step="any">

            <Label>Valor2</Label>
            <input type="number" name="valor2" required step="any">

            <label>Operação</label>
            <select name="operacao">
                <option value="soma">Soma (+)</option>
                <option value="sub">Subtração (-)</option>
                <option value="mul">Multiplicação (*)</option>
                <option value="div">Divisão (/)</option>
            </select>

            <button type="submit">Calcular</button>

        </form>

        <h3>Resultado</h3>

        <?php

        // verifica se o formulário foi enviado usando o method POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Recebe os valores enviados pelo formulário
            $valor1 = (int) $_POST["valor1"];
            $valor2 = (int) $_POST["valor2"];
            $operacao = $_POST["operacao"];
            $resultado = " ";

            // verifica qual operação foi selecionada
            switch ($operacao) {

                case "soma":
                    $resultado = $valor1 + $valor2;
                    break;
                case "sub":
                    $resultado = $valor1 - $valor2;
                    break;
                case "mul":
                    $resultado = $valor1 * $valor2;
                    break;
                case "div":
                    if ($valor2 == 0) {
                        $resultado = "O número não pode ser divisivel por zero";
                    } else {
                        $resultado = $valor1 / $valor2;
                    }
                    break;
            }

            // exibe o resultado da operação
            echo $resultado;

        }

        ?>

    </div>

</body>

</html>

