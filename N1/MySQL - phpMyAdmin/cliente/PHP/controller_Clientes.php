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
        $email = $_REQUEST['email'];
        $telefone = $_REQUEST['telefone'];

        $inserirCli = $cliente -> inserirCliente($codigo, $empresa, $contato, $cidade, $email, $telefone);

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
        $email = $_REQUEST['email'];
        $telefone = $_REQUEST['telefone'];

        $alterar = $cliente -> alterarCliente($id, $codigo, $empresa, $contato, $cidade, $email, $telefone);

        echo $alterar;
    break;

}

?>