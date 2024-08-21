<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>

    <style>
        .dias{
            color: palevioletred;
        }
    </style>

</head>

<body>
    <?php

    $dia = "segunda";

    switch ($dia) {


        case "segunda":
            echo "<h2 class = dias> Hoje é 2ª Feira ! </h2>";
            break;

        case "terca":
            echo "Hoje é 3ª Feira !";
            break;

        case "quarta":
            echo "Hoje é 4ª Feira !";
            break;

        case "quinta":
            echo "Hoje é 5ª Feira !";
            break;

        case "sexta":
            echo "Sextaremos !!";
            break;

        default:
            echo "Final de semana !";
            break;

    }



    ?>

</body>

</html>