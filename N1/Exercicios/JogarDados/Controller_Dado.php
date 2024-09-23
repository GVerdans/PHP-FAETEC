<?php

include 'Dado.php';

$dado = new Dado();
$acao = $_POST['acao'];

switch ($acao){
    case 'jogarDado':
        $dado = $dado->jogarDado();
        echo $dado;
    break;

    case 'mostrarDado':
        $dado1 = $_POST['dado1'];
        $dado2 = $_POST['dado2'];

        
        // echo $resultado;
        break;
        
        case 'mostrarResultadoJogoDado':
            $dado1 = $_POST['dado1'];
            $dado2 = $_POST['dado2'];

            $resultado = $dado-> mostrarResultadoJogoDado($dado1, $dado2);
            echo $resultado;
        break;
}


// $MostrarDado1 = $_POST['dado1'];

// $dado2 = $dado->jogarDado();
// $mostrarDado2 = $_POST['dado2'];

// $resultado = $dado->mostrarResultadoJogoDado($dado1, $dado2);




?>