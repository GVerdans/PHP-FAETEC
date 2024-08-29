<?php
function pularDuasLinha(){
    $acao = '<br> <br>';

    return $acao;
}

function escreverDataCorrente(){
    date_default_timezone_set('America/Sao_Paulo');

    $dataHoraCorrente = date('d/m/Y - H:i:s');

    return $dataHoraCorrente;
}

function saudacao(){
    date_default_timezone_set('Australia/Sydney');
    $horaCorrente = date('H:i');
    echo $horaCorrente;

    if ($horaCorrente < 12){
        $mensagem = "<h2>Bom dia !</h2>";
    } else if ($horaCorrente < 18){
        $mensagem = "<h2>Boa Tarde !</h2>";
    } else {
        $mensagem = "<h2>Boa Noite !</h2>";
    }
    return $mensagem;
}


?>