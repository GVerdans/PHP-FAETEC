<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Maior Valor</title>

    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <?php

    // && - E
    // || - OU
    // ! - NOT
    
    $num1 = $_POST["ipt_number1"];
    $num2 = $_POST["ipt_number2"];
    $num3 = $_POST["ipt_number3"];

    if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        echo "<h3> Os valores precisam ser diferentes ! </h3>";

    } else {

        if ($num1 > $num2 && $num1 > $num3) {
            $maior = $num1;
            if ($num2 > $num3) {
                $medio = $num2;
                $menor = $num3;
            } else {
                $medio = $num3;
                $menor = $num2;
            }
        } else if ($num2 > $num1 && $num2 > $num3) {
            $maior = $num2;
            if ($num1 > $num3) {
                $medio = $num1;
                $menor = $num3;
            } else {
                $medio = $num3;
                $menor = $num1;
            }
        } else {
            $maior = $num3;
            if ($num1 > $num2) {
                $medio = $num1;
                $menor = $num2;
            } else {
                $medio = $num2;
                $menor = $num1;
            }
        }

        echo "<h3> O valor $maior é maior que o valores $medio e $menor ! </h3>";
    }
    ?>
</body>

</html>