<?php

$nome = 'Gabriel';

function pularDuasLinhas(){
    $quebraDeLinha = "<br><br>";

    return $quebraDeLinha;
}

// ---------- FUNCOES DE STRING ----------------

// toUpperCase
$maiscula =  strtoupper($nome);
echo $maiscula;

echo pularDuasLinhas(); 

// toLowerCase
$minuscula = strtolower($nome);
echo $minuscula;

echo pularDuasLinhas();


// JS.length // PHP strlen - Contar numero de caracteres
$contarCaracteres = strlen($nome);

echo "O nome $nome tem $contarCaracteres caracteres !";

echo pularDuasLinhas(); // <-- function


// Obter parte de uma String // variavel, parametro, parametro.
$parteDeUmaString = substr($nome, 0, 3);
echo $parteDeUmaString;

echo pularDuasLinhas();

// Inverso de cima
$parteDeUmaString = substr($nome, -3);
echo $parteDeUmaString;

echo pularDuasLinhas();


// -----------------FUNCOES NUMÉRICAS --------------------

// Round -- arredonda o decimal, pra cima, ou pra baixo.

$valor = 4.8999999;
$arredonda = round($valor);

echo "Arredonda o valor $valor para $arredonda";

echo pularDuasLinhas();

//intval -- int no JS.

$inteiro = intval($valor);

echo "O Numero Inteiro de $valor eh $inteiro";

echo pularDuasLinhas();

//rand - Gera um valor aleatório entre o intervalo definido.

$aleatorio = rand (1,10);

echo "Gera um numero aleatorio, aqui no caso entre 1 e 10 -- $aleatorio";

echo pularDuasLinhas();

// Formato Brasileiro --

$numero = 1234.5678;

echo "R$ ".number_format($numero,2,',', '.' );


echo pularDuasLinhas();


// ---------FUNCOES DA DATA/HORA ------------
// Cheio de peculiaridades.

$dataCompleta = date('d/m/Y H:i:s'); // Y - 2024     y - 24

echo "Data completa -- $dataCompleta";

echo pularDuasLinhas();
?>