<?php

include 'Cliente.php';

$cliente = new Cliente();
$acao = $_REQUEST['acao'];

switch($acao){

    case 'inserir':
        $codigo = $_REQUEST['codigo'];
        $empresa = $_REQUEST['empresa'];
        $contato = $_REQUEST['contato'];
        $cidade = $_REQUEST['cidade'];

        $inserirCli = $cliente -> inserirCliente($codigo, $empresa, $contato, $cidade);

        echo $inserirCli;
    break;

        
    case 'excluir':
        $id = $_GET['IdCliente'];

        $excluir = $cliente ->excluirCliente($id);

        echo $excluir;
    break;


    case 'editar';
       $id = $_GET['IdCliente'];

       $editar = $cliente -> selecionarUmCliente($id);

       echo $editar;
    break;


    case 'alterar':
        $id = $_REQUEST['idcliente'];
        $codigo = $_REQUEST['codigo'];
        $empresa = $_REQUEST['empresa'];
        $contato = $_REQUEST['contato'];
        $cidade = $_REQUEST['cidade'];

        $alterar = $cliente -> alterarCliente($id, $codigo, $empresa, $contato, $cidade);

        echo $alterar;
    break;

}

?>