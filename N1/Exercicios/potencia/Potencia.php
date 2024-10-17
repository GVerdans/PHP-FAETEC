<?php

class Potencia{

    public function exibirPotencia($num){
        
        $i = 1;
        // $vaiPraTela = "";

        while($i <= 10){
            $resultado = pow($num, $i);
            echo "$num<sup>$i</sup> = $resultado<br>";
            $i++;
        }
        
        // return $vaiPraTela;

    }

}



?>