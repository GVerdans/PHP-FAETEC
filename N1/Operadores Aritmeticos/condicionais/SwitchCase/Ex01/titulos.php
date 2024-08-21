<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulos</title>

    <link rel="stylesheet" href="./titulo.css" />

</head>

<body>

    <div id="resultadoTitulos">
        <div class="sistemaDeTitulos">


            <?php

            $numTitulos = $_POST["numTitulos"];

            

            switch ($numTitulos) {

                case "0":
                    echo "<p class = txtSaida>Ganhou nada =(</p>";
                    break;

                case "1":
                    echo "<p class = txtSaida>Campeão !</p>";
                    break;

                case "2":
                    echo "<p class = txtSaida>Bicampeão !</p>";
                    break;

                case "3":
                    echo "<p class = txtSaida>Tricampeão !</p>";
                    break;

                case "4":
                    echo "<p class = txtSaida>Tetracampeão !</p>";
                    break;

                default:
                    echo "<p class = txtSaida>Campeão pra kct !</p>";
                    break;

            }



            ?>

        </div>
    </div>

</body>

</html>