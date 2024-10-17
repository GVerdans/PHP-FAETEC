<?php

include 'Potencia.php';

$potencia = new Potencia();

$num = $_POST['num'];

$exibirPotencia = $potencia -> exibirPotencia($num);


echo $exibirPotencia;





?>