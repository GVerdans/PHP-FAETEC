<?php

include 'jokempo.php';

$jokempo = new jokempo();

$minhajogada = $_POST['minhajogada'];

$JogadaDoComputador = $jokempo -> retornarJogadaDoComputador();

$resultadoDoJogo = $jokempo -> retornarVencedor($minhajogada, $JogadaDoComputador);

echo "$resultadoDoJogo <br>";

echo "Humano Jogou: $minhajogada <br> Máquina Jogou: $JogadaDoComputador"
?>