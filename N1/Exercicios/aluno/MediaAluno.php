<?php

class Aluno{ // classe

    public function CalcularMedia($nota1, $nota2){ // metodo 1
        $media = ($nota1 + $nota2) / 2;
        return $media;
    }


    public function VerificarSituacao($media){ // metodo 2
        $situacao = "";

        if ($media >= 7){
            $situacao = "Aprovado !";
        } else {
            $situacao = "Reprovado !";
        }
        
        return $situacao;
    }
}
?>