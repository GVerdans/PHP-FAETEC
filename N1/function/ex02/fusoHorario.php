<?php

function fusoHorario($cidade){

    switch($cidade){
        case 'Tokyo':
            $timeZone = date_default_timezone_set('Asia/Tokyo');
            $horaLocal = date('H:i');
            echo "São $horaLocal em Tokyo !";
        break;

        case 'London':
            $timeZone = date_default_timezone_set('Europe/London');
            $horaLocal = date('H:i');
            echo "São $horaLocal em London !";
        break;

        case 'New York':
            $timeZone = date_default_timezone_set('America/New_York');
             $horaLocal = date('H:i');
            echo "São $horaLocal em New York !";
        break;

        case 'Dubai':
            $timeZone = date_default_timezone_set('Asia/Dubai');
             $horaLocal = date('H:i');
            echo "São $horaLocal em Dubai !";
        break;

        case 'Sydney':
            $timeZone = date_default_timezone_set('Australia/Sydney');
             $horaLocal = date('H:i');
            echo "São $horaLocal em Sydney !";
        break;

        case 'Sao Paulo':
            $timeZone = date_default_timezone_set('America/Sao_Paulo');
            $horaLocal = date('H:i');
            echo "Sao $horaLocal em São Paulo !";
        break;
    }   

    // $mensagem = "$cidade"

    return $cidade;

}


?>