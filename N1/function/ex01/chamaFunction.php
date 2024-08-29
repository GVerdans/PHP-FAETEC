<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamar as Functions</title>
</head>
<body>
    <?php
    include "function.php";
    echo "<h2>".escreverDataCorrente()."</h2>";

    pularDuasLinha();
    pularDuasLinha();

    echo "<h2>".saudacao()."</h2>";

    ?>
</body>
</html>