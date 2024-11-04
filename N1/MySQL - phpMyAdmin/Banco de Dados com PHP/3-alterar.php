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

$CodigoDoCliente = 'RJ01';
$NomeDoContato = 'Gabriel Verdan';


$consulta = "update cliente
set NomeDoContato = '$NomeDoContato'
where CodigoDoCliente = '$CodigoDoCliente'";

$resultado = mysql_query($consulta)
or die ("Falha na Alteração !");

echo ("Dados alterados com Sucesso !<br><br>");

echo "<b>Codigo do Cliente:</b> $CodigoDoCliente<br>";
echo "<b>Nome do Contato:</b> $NomeDoContato<br>";
echo'<hr>';
?>


</body>
</html>