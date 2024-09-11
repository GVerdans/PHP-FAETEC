<?php

include 'IMC.php';

$IMC = new IMC();
$peso = 90; // $_POST depois
$altura = 1.75; // $_POST depois


$valorDoIMC = $IMC->calcularIMC($peso, $altura); // Caso dê xabu, mudar o nome da variavel.
$VRFSituacao = $IMC->verificarSituacao($valorDoIMC);
$descricaoDoIndice = $IMC->descricao($VRFSituacao);

$mensagem = "
O seu IMC foi: $valorDoIMC <br><br>
A sua situação é: $VRFSituacao <br><br>
A descrição da sua Situação é: $descricaoDoIndice
";

echo $mensagem;
exit


?>