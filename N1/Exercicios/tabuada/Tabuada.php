<?php

class Tabuada{

    public function exibirTabuada($num){
        //    $exibicao = "";

            for ($i=1 ; $i<=10 ; $i++){

                $resultado = $num * $i;

                $exibicao = "$num x $i = $resultado <br>";
                echo $exibicao;
            }

            // return $exibicao;
    }

}



?>