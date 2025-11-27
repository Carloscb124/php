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
    }

    ?>

 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <title>Calculadora</title>
 </head>

 <style>
     body {
         font-family: Arial, Helvetica, sans-serif;
         background: #342E37;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         margin: 0;
     }

     .container {
         background: #070600;
         padding: 25px;
         border-radius: 25px;
         box-shadow: 0 0 10px rgba(31, 31, 31, 1);
         width: 320px;
     }

     h2 {
         text-align: center;
         margin-bottom: 20px;
         color: #F7F7FF;
     }

     form {
         display: flex;
         flex-direction: column;
         gap: 15px;
     }

     label {
         font-size: 15px;
         font-weight: 600;
         color: #F7F7FF;
     }

     input,
     select {
         padding: 10px;
         border-radius: 8px;
         border: 1px solid #ddd;
         font-size: 15px;
     }

     button {
         background: #ff9500ff;
         color: #fff;
         padding: 12px;
         border: none;
         border-radius: 8px;
         font-size: 16px;
         cursor: pointer;
         transition: .2s;
         margin-top: 10px;
         margin-bottom: 10px;
     }

     button:hover {
         background: #0053c7;
     }

     h3 {
         margin-top: 25px;
         text-align: center;
         color: #F7F7FF;
     }

     .resultado-box {
         margin-top: 15px;
         margin-bottom: 20px;
         padding: 15px;
         text-align: right;
         background: #FAFFFD;
         border-radius: 10px;
         font-size: 18px;
         font-weight: bold;
         border: 1px solid #ddd;
         height: 17px;
         color: #000000ff;
     }

     .resultado-box.placeholder {
        color: #aaa;
    }

 </style>

 <body>

     <div class="container">

         <h2>Calculadora Simples</h2>

         <div class="resultado-box <?php echo isset($resultado) ? '' : 'placeholder'; ?>">
            <?php
                echo isset($resultado) ? $resultado : "0"; 
            ?>
         </div>

         <form method="post">

             <Label>Primeiro Valor</Label>
             <input type="number" name="valor1" required step="any">

             <Label>Segundo Valor</Label>
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

     </div>

 </body>

 </html>