<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chama Fuso</title>
</head>
<body>
    <?php
    include "fusoHorario.php";

    $cidade = $_POST["cidade"];

    fusoHorario($cidade);

    ?>
    
</body>
</html>