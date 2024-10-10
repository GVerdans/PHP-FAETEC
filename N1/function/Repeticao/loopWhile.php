<?php
// mesma funçã do FOR, porem sintaxe diferente.

// $i = rand(1, 50);
// $fim = rand(1, 50);

// if($i>$fim){
//     // $aux = "";

//     $aux = $i;
//     $i = $fim;
//     $fim = $aux;
// }

// // echo "$i <br> $fim<br> $aux<br><br><br>";

// while($i <= $fim){
//     echo "<font color =blue>$i </font><br>";
//     $i++;
// }

/*
// POR SEMANA.
$semana = 0;
$total = 0;

while ($semana <= 52){
    // $dinheiros="";

    $dinheiros = $semana;

    $total += $semana;
       
    $semana++;

    echo "Semana $dinheiros<br> Botei - $dinheiros<br> Total - $total<br> <hr>";
}
*/


// POR MES.

$semana = 1;
$mes = 1;
$total = 0;
while ($semana <= 52){
    $total += $semana;
    // $semana++;
    
    if($semana % 4 == 0){
        //    $mes=$semana/4;
           echo "Acumulado do mês $mes<br> R$ $total<hr>";
           $mes++;
    }
    $semana++;
}

?>
