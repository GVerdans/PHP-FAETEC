<?php

include 'MediaAluno.php';

$aluno =  new Aluno(); // instanciando a classe.

$nome = $_POST["nome"];
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];



$media = $aluno->CalcularMedia($nota1, $nota2);

$situacao = $aluno->VerificarSituacao($media);

$mensagem = "Nome: $nome <br> Nota1: $nota1 <br> Nota2: $nota2 <br> Media: $media <br> Situação: $situacao";

echo $mensagem;
exit;

?>