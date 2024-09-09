<?php

include "FusoHorario.php";

$fusoHorario = new FusoHorario(); // instanciar a classe

$cidade = $_POST['cidade'];

$result = $fusoHorario -> getFusoHorario($cidade);

echo $result;
exit;


?>