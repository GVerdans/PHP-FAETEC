<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir dados no DB</title>
</head>
<body>
    
<?php

mysql_connect('localhost','root', 'usbw')
or die('Não foi possível Conectar !');

mysql_select_db('php202402')
or die('Não foi possível Selecionar o DB');

$CodigoDoCliente = 'RS01';
$NomeDaEmpresa = 'Lanches do Gui';
$NomeDoContato = 'Guilherme';
$Cidade = 'Rio Grande do Sul';


$consulta = "insert into cliente
(CodigoDoCliente, NomeDaEmpresa, NomeDoContato, Cidade)
values
('$CodigoDoCliente', '$NomeDaEmpresa', '$NomeDoContato', '$Cidade')";

$resultado = mysql_query($consulta)
or die ('Falha na inserção de Dados na tabela clientes');

echo "Dados Inserido na tabela <b>CLIENTE</b>!<br><br>";
echo "<b>Codigo do Cliente:</b> $CodigoDoCliente<br>";
echo "<b>Nome da Empresa:</b> $NomeDaEmpresa<br>";
echo "<b>Nome do Contato:</b> $NomeDoContato<br>";
echo "<b>Cidade:</b> $Cidade<br>";
echo'<hr>';

?>


</body>
</html>