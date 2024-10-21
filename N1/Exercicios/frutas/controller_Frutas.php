<?php

include 'Frutas.php';
$fruits = new Frutas();

$frutas = $_POST['frutasSelecionadas'];

$exibirFrutas = $fruits -> exibirFrutas($frutas);
$quantidadeDeFrutas = $fruits -> quantidadeDeFrutas($frutas);
$valorDaSalada = $fruits -> precoDaSaladaDeFrutas($frutas);

echo 
"<b>Quantidade de Frutas Selecionadas:</b> $quantidadeDeFrutas <br>
<b>Frutas Selecionadas: $exibirFrutas</b> <br>
<b>Preço da Salada de Frutas:</b> R$ $valorDaSalada
";





?>