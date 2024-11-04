<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar DB</title>
</head>
<body>
    
<?php

mysql_connect('localhost','root', 'usbw')
or die('Não foi possível Conectar !');

mysql_select_db('php202402')
or die('Não foi possível Selecionar o DB');

$CodigoDoCliente = 'RS01';

$consulta = "delete from cliente where CodigoDoCliente = '$CodigoDoCliente'";

$resultado = mysql_query($consulta)
or die ("Falha na Alteração !");

echo ("Registro Excluido com Sucesso !<br><br>");

echo "<b>Codigo do Cliente Excluido:</b> $CodigoDoCliente<br>";
?>


</body>
</html>