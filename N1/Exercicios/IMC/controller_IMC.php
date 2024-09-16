<?php

include 'IMC.php';

$IMC = new IMC();

$nome= ucfirst($_POST['nome']);
$peso = $_POST['peso']; 
$altura = $_POST['altura'];


$valorDoIMC = $IMC->calcularIMC($peso, $altura); // Caso dê xabu, mudar o nome da variavel.
$VRFSituacao = $IMC->verificarSituacao($valorDoIMC);
$descricaoDoIndice = $IMC->descricao($VRFSituacao);

$mensagem = "<p>Olá $nome, seu IMC deu <b>$valorDoIMC</b>, logo sua situação é de <b>$VRFSituacao</b> o que quer dizer:</p><br> $descricaoDoIndice.";

echo $mensagem;
exit


?>