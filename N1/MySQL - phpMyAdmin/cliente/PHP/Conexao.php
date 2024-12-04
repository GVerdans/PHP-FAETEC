<?php

class Conexao{
    public function conectarBanco(){

        $con = mysqli_connect('localhost', 'root', 'usbw', 'php202402') // Substitui o 'mysql_connect' devido ao ultimo campo, que é o DB.
        or die ('Falha na Conexão !');

        return $con; 
    }

}

?>