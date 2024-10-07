<?php

include 'Tabuada.php';

$tabuada = new Tabuada();

$num = $_POST['num'];

$exibirTabuada = $tabuada -> exibirTabuada($num);


echo $exibirTabuada;





?>