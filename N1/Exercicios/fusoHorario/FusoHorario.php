<?php
class FusoHorario
{ // classe

    public function getFusoHorario($cidade)
    { // metodo
        switch ($cidade) {

            case 'Tokyo':
                date_default_timezone_set('Asia/Tokyo');
                break;

            case 'London':
                date_default_timezone_set('Europe/London');
                break;

            case 'Nova York':
                date_default_timezone_set('America/New_York');
                break;

            case 'Dubai':
                date_default_timezone_set('Asia/Dubai');
                break;

            case 'Sydney':
                date_default_timezone_set('Australia/Sydney');
                break;

            case 'São Paulo':
                date_default_timezone_set('America/Sao_Paulo');
                break;

            default:
                return "Cidade não encontrada ou não suportada.";
        }

        $mensagem = $cidade . " " . date('d/m/Y H:i');
        return $mensagem;
    }

}


?>