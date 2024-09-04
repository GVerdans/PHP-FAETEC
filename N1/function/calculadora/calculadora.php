<?php

class Calculadora{ // Clase
    public function efetuarCalculo($valor1, $valor2, $operacao){ // Método
        $resultado="";
        switch($operacao){
            case 'soma':
                $resultado = $valor1 + $valor2;
            break;

            case 'subtracao':
                $resultado = $valor1 - $valor2;
            break;

            case 'multiplicacao':
                $resultado = $valor1 * $valor2;
            break;

            case 'divisao':
                if($valor2 == 0){
                    $resultado = 'ERRO: Divisão por 0';
                } else {
                    $resultado = $valor1 / $valor2;
                }
            break;
        }
        return $resultado;
    }
}

?>