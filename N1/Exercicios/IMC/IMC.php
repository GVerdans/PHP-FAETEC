<?php

class IMC{

    public function calcularIMC($peso, $altura){
        $IMC = $peso / ($altura * $altura);
        return number_format((float)$IMC, 2, '.', '');
    }

    public function verificarSituacao($IMC){
        if ($IMC < 18.5){
            $situacao = "Abaixo do peso";
        } 

        else if ($IMC < 24.9){
            $situacao = "Peso normal";
        } 

        else if ($IMC < 29.9){
            $situacao = "Sobrepeso";
        } 

        else if ($IMC < 34.9){
            $situacao = "Obesidade Grau I";
        } 

        else if ($IMC < 39.9){
            $situacao = "Obesidade Grau II";
        } 

        else {
            $situacao = "Obesidade Grau III";
        }

        return $situacao;
    }

    public function descricao($situacao){
        if ($situacao == "Abaixo do peso"){
            $texto = "Indica que a pessoa está abaixo do peso considerado saudável para sua altura. Pode indicar desnutrição, falta de nutrientes essenciais ou outros problemas de saúde.";
        } 
        
        else if ($situacao == "Peso normal"){
            $texto = "Indica que a pessoa está dentro da faixa de peso considerada saudável para sua altura. É o intervalo ideal para a maioria das pessoas em termos de saúde e bem-estar.";
        } 
        
        else if ($situacao == "Sobrepeso"){
            $texto = "Indica que a pessoa está acima do peso considerado saudável para sua altura. O sobrepeso pode aumentar o risco de desenvolver doenças crônicas, como diabetes tipo 2, doenças cardiovasculares e hipertensão.";
        } 

        else if ($situacao == "Obesidade Grau I"){
            $texto = "Indica obesidade de grau leve. O excesso de peso nessa faixa aumenta significativamente o risco de problemas de saúde, incluindo doenças cardiovasculares, diabetes tipo 2 e alguns tipos de câncer.";
        }
        
        else if ($situacao == "Obesidade Grau II"){
            $texto = "Indica obesidade de grau moderado. O risco de complicações de saúde, como doenças cardiovasculares e diabetes, é ainda maior nessa faixa";
        } 
        
        else {
            $texto = "Indica obesidade de grau grave. O risco de desenvolver problemas de saúde graves e potencialmente fatais, como doenças cardíacas, acidente vascular cerebral (AVC) e alguns tipos de câncer, é muito alto";
        }

        return $texto;
    }

}

?>