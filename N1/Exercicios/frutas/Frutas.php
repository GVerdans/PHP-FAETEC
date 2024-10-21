<?php

class Frutas{

    public function exibirFrutas($frutas){
        $cores = array(
        "Abacaxi" => "green",
        "Banana" => "gold",
        "Manga" => "orange",
        "Morango" => "red",
        "Uva" => "purple"
        );

        // $frutas = array("Abacaxi", "Banana", "Manga", "Morango", "Uva");

        $resultado = "";

        foreach($frutas as $valor){
        $cor = $cores[$valor];
    
        $resultado .="<span style ='color:$cor'>$valor</span> &nbsp;&nbsp";
        }

        return $resultado;
    }

    public function quantidadeDeFrutas($frutas){
        $quantidade = count($frutas);

        return $quantidade;
    }

    public function precoDaSaladaDeFrutas($frutas){
       $preco = array(
           "Abacaxi" => 2,
           "Banana" => 2,
           "Manga" => 2,
           "Morango" => 2,
           "Uva" => 2
       );

       $total = 0;

       foreach ($frutas as $valor) {
            $quantidade = $this->quantidadeDeFrutas($valor);
            $total += $quantidade * $preco[$valor];
        }    

        $precoFormatado = number_format($total, 2, ',','.');
        return $precoFormatado;
    }


}

?>