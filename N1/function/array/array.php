<?php
// DECLARACAO DE ARRAY NORMAL

// $frutas[0] = "Uva";
// $frutas[1] = "Manga";
// $frutas[2] = "Banana";
// $frutas[3] = "Pera";
// $frutas[4] = "Salada Mista";

// $frutas = array("Uva", "Manga", "Banana", "Pera", "Salada Mista");

// $tamanho = count($frutas);
// echo "Tamanho do Array - <b>$tamanho</b> Indices<br><br>";




// for ($i = 0; $i < $tamanho; $i++){
//     echo "<font color=red>$frutas[$i]</font>";
    
//     if($i <($tamanho -1)){
//         echo " - ";
//     }

// }




// DECLARACAO DE MATRIZ

$frutas[0]["fruta"] = "Uva";
$frutas[1]["fruta"] = "Manga";
$frutas[2]["fruta"] = "Banana";

$frutas[0]["cor"] = "Purple";
$frutas[1]["cor"] = "Orange";
$frutas[2]["cor"] = "Gold";



$tamanho = count($frutas);
echo "Tamanho do Array - <b>$tamanho</b> Indices<br><br>";



for ($i = 0; $i < $tamanho; $i++){
    echo "<font color=".$frutas[$i]["cor"].">".$frutas[$i]["fruta"]."</font>";
    
    if($i <($tamanho -1)){
        echo " - ";
    }

}


?>