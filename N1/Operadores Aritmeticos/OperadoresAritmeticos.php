<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Aritmeticos</title>
    <link rel="stylesheet" href="./sources/styles/stylesPHP.css">
</head>

<body>

    <?php

    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $operacao = $_POST["operacao"];


    if ($operacao == "soma") {
        $soma = $valor1 + $valor2;
        echo "<h3>A Soma de $valor1 e $valor2 é igual a $soma. </h3>";

    } else if ($operacao == "subtracao") {
        $subtracao = $valor1 - $valor2;
        echo "<h3>A Subtração de $valor1 e $valor2 é igual a $subtracao. </h3>";

    } else if ($operacao == "multiplicacao") {
        $multiplicacao = $valor1 * $valor2;
        echo "<h3>A Multiplicação de $valor1 e $valor2 é igual a $multiplicacao. </h3>";

    } else {
        $divisao = $valor1 / $valor2;
        echo "<h3>A Divisão de $valor1 e $valor2 é igual a $divisao. </h3>";
    }


        // $resto = $valor1 % $valor2;
        // echo "<h3>O Resto de $valor1 e $valor2 é igula a $resto. </h3>";
    ?>
</body>

</html>