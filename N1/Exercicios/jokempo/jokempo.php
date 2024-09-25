<?php

class jokempo{

    public function retornarJogadaDoComputador(){
        $jogadaComputador = rand(1, 3);

        switch ($jogadaComputador){
            case 1:
                $aposta = 'Pedra';
            break;

            case 2:
                $aposta = 'Papel';
            break;

            case 3:
                $aposta = 'Tesoura';
            break;
        }

        return $aposta;
    }

    public function retornarVencedor($minhajogada, $jogadaComputador){
        
        if(($minhajogada == 'Papel' && $jogadaComputador == 'Papel') || ($minhajogada == 'Pedra' && $jogadaComputador == 'Pedra') || ($minhajogada == 'Tesoura' && $jogadaComputador == 'Tesoura')){
            
            $resultado = 'Empate !';
            return $resultado;

        } else if(($minhajogada == 'Papel' && $jogadaComputador == 'Pedra') || ($minhajogada == 'Pedra' && $jogadaComputador == 'Tesoura') || ($minhajogada == 'Tesoura' && $jogadaComputador == 'Papel')){

            $resultado = 'Vitória do Humano !';
            return $resultado;

        } else {
            $resultado = 'Vitória da Maquina !';
            return $resultado;
        }

        return $resultado;

    }



}


?>