<?php

include "FusoHorario.php";

$fusoHorario = new FusoHorario();

$cidade = $_POST['cidade'];

$result = $fusoHorario -> getFusoHorario($cidade);

echo $result;
exit;


?>