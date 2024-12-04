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

$consulta = 'select * from cliente';
$resultado = mysql_query($consulta)
or die ('Falha na execução da consulta !');

while($linha = mysql_fetch_assoc($resultado)){
    $CodigoDoCliente = $linha['CodigoDoCliente'];
    $NomeDaEmpresa = $linha['NomeDaEmpresa'];
    $NomeDoContato = $linha['NomeDoContato'];
    $Cidade = $linha['Cidade'];


    echo "<b>Codigo do Cliente:</b> $CodigoDoCliente<br>";
    echo "<b>Nome da Empresa:</b> $NomeDaEmpresa<br>";
    echo "<b>Nome do Contato:</b> $NomeDoContato<br>";
    echo "<b>Cidade:</b> $Cidade<br>";
    echo'<hr>';
}

?>


</body>
</html>