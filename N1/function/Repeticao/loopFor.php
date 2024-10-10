<?php

for($i = 0 ; $i <= 50 ; $i += 2 ){
    echo "$i <br>";
}

echo "<br><br>";

for($i = 0 ; $i <= 50 ; $i++){
    if($i % 2 == 0){
        echo "$i eh <b><font color=red>par</font></b><br>";
    } else {
        echo "$i eh <font color=blue><b>impar</b></font><br>";
    }
}


echo "<br><br>";


for($i =20 ; $i >=1 ; $i--){
    echo "$i<br>";
}

 echo "<br><br>";

for($i = 1 ; $i<=100 ; $i++){

    if($i < 10){
        echo "0$i &nbsp";
    }else{
        echo "$i &nbsp";
    }
    
    if($i % 10 == 0){
        echo "<br>";
    }   
}

?>