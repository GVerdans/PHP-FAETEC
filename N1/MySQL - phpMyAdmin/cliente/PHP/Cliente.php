<?php

include 'Conexao.php';

class Cliente{
    public function listarClientes(){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $consulta = 'select * from cliente order by NomeDaEmpresa'; // comandos em MySQL
        $resultado = mysqli_query($con, $consulta) // Envia uma consulta MySQL
        or die ('Falha na execução da consulta !');

        $tabela ='';

        while($linha = mysqli_fetch_assoc($resultado)){ // Obtém uma linha do resultado como um array associativo
            $CodigoDoCliente = $linha['CodigoDoCliente'];
            $NomeDaEmpresa = $linha['NomeDaEmpresa'];
            $NomeDoContato = $linha['NomeDoContato'];
            $Cidade = $linha['Cidade'];
            $idCliente = $linha['idCliente'];

            $tabela .="<tr>";
            $tabela .="<td>$CodigoDoCliente</td>";
            $tabela .="<td>$NomeDaEmpresa</td>";
            $tabela .="<td>$NomeDoContato</td>";
            $tabela .="<td>$Cidade</td>";

            $tabela .= "<td><button type='button' id='$idCliente' class='btn btn-success editar_cliente'>Editar</button>
                        <button type='button' id='$idCliente' class='btn btn-danger excluir_cliente'>Excluir</buton> </td>";
            $tabela .= '</tr>';

        }

        return $tabela;
    }

    public function inserirCliente($CodigoDoCliente, $NomeDaEmpresa, $NomeDoContato, $Cidade){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();


        $CodigoDoCliente = 'RS01';
        $NomeDaEmpresa = 'Lanches do Gui';
        $NomeDoContato = 'Guilherme';
        $Cidade = 'Rio Grande do Sul';


        $consulta = "insert into cliente
        (CodigoDoCliente, NomeDaEmpresa, NomeDoContato, Cidade)
        values
        ('$CodigoDoCliente', '$NomeDaEmpresa', '$NomeDoContato', '$Cidade')";

        $resultado = mysqli_query($con, $consulta)
        or die ('Falha na inserção de Dados na tabela clientes');

        echo "Dados Inserido na tabela <b>CLIENTE</b>!<br><br>";
        echo "<b>Codigo do Cliente:</b> $CodigoDoCliente<br>";
        echo "<b>Nome da Empresa:</b> $NomeDaEmpresa<br>";
        echo "<b>Nome do Contato:</b> $NomeDoContato<br>";
        echo "<b>Cidade:</b> $Cidade<br>";
        echo'<hr>';
    }

    public function alterarCliente($idCliente, $CodigoDoCliente, $NomeDaEmpresa, $NomeDoContato, $Cidade){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();

        $CodigoDoCliente = 'RJ01';
        $NomeDoContato = 'Gabriel Verdan';
        
        
        $consulta = "update cliente
        set NomeDoContato = '$NomeDoContato'
        where CodigoDoCliente = '$CodigoDoCliente'";
        
        $resultado = mysqli_query($con, $consulta)
        or die ("Falha na Alteração !");
        
        echo ("Dados alterados com Sucesso !<br><br>");
        
        echo "<b>Codigo do Cliente:</b> $CodigoDoCliente<br>";
        echo "<b>Nome do Contato:</b> $NomeDoContato<br>";
        echo'<hr>';
    }
    
    public function excluirCliente($idCliente){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();
        
        $CodigoDoCliente = 'RS01';

        $consulta = "delete from cliente where CodigoDoCliente = '$CodigoDoCliente'";
        
        $resultado = mysqli_query($con, $consulta)
        or die ("Falha na Alteração !");
        
        echo ("Registro Excluido com Sucesso !<br><br>");
        
        echo "<b>Codigo do Cliente Excluido:</b> $CodigoDoCliente<br>";
    }

    public function selecionarUmCliente($idCliente){
        $conexao = new Conexao();
        $con = $conexao -> conectarBanco();
    }

}

?>