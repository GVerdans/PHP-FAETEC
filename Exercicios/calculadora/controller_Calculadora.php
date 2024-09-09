<?php

include "calculadora.php"; // Chamar o Arquivo.

$calculadora = new Calculadora();

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$operacao = $_POST['operacao'];

$result = $calculadora -> efetuarCalculo($valor1, $valor2, $operacao);

echo $result;
exit;

?>