<?php

class Dado{
    public function jogarDado(){
        $dado = rand(1,6);
        
       // $num2 = rand(1,6);
        return $dado;
    }

    public function mostrarResultadoJogoDado($dado1, $dado2){
        if (intval($dado1) == intval($dado2)){
            $resultado = 'Empate !';

        } else if (intval($dado1) > intval($dado2)) {
            $resultado = 'Vitória do Jogador 1 !';

        } else {
            $resultado = 'Vitória do Jogador 2 !';
        }
        return $resultado;
    }
}


?>